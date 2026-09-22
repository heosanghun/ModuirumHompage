#!/usr/bin/env python
# -*- coding: utf-8 -*-
"""
Dothome FTP deploy for Moduirum / AtomCompany homepage.
Windows: python deploy_ftp.py --profile atom-web
"""

from __future__ import annotations

import argparse
import json
import os
import sys
import time
from pathlib import Path

import ftplib

# ---------- profiles ----------

PROFILE_INCLUDE = {
    "atom-web": [
        "index.html",
        "asset-manifest.json",
        "favicon.svg",
        "manifest.json",
        "logo192.png",
        "logo512.png",
        "atlas_badge.png",
        "atlas_logo.png",
        "robots.txt",
        "static",
        "web",
        "autonomous",
        "binasea",
        "riteflow",
        "aivora_assets",
    ],
    "moduirum-legacy": [
        "index.html",
        "physical_ai_data_factory.html",
        "package.json",
        "DESIGN.md",
        "assets",
        "screens",
        "hsh.php",
        "images",
        "send_mail.php",
        "thank_you.php",
        "README.md",
    ],
}

SKIP_DIR_NAMES = {
    ".git",
    "node_modules",
    "__pycache__",
    ".venv",
    "venv",
    ".agents",
    ".idea",
    ".vscode",
}

SKIP_FILE_NAMES = {
    ".env",
    "settings.json",
    "deploy_ftp.py",
    "upload_to_dothome.py",
}

DEFAULT_SETTINGS_CANDIDATES = [
    Path(__file__).resolve().parent / "settings.json",
    Path(__file__).resolve().parent.parent / "homepage" / "settings.json",
    Path(r"d:\Moduirum\homepage\settings.json"),
]


def load_ftp_config() -> tuple[str, str, str, str]:
    host = os.environ.get("FTP_HOST", "").strip()
    user = os.environ.get("FTP_USER", "").strip()
    password = os.environ.get("FTP_PASS", "").strip()
    remote_root = os.environ.get("FTP_REMOTE_ROOT", "").strip()

    if not all([host, user, password]):
        settings_path = next((p for p in DEFAULT_SETTINGS_CANDIDATES if p.is_file()), None)
        if not settings_path:
            raise SystemExit(
                "FTP config missing. Set FTP_HOST/FTP_USER/FTP_PASS or create settings.json"
            )
        with open(settings_path, "r", encoding="utf-8") as f:
            s = json.load(f)
        host = host or s.get("ftpMini.host", "")
        user = user or s.get("ftpMini.username", "")
        password = password or s.get("ftpMini.password", "")
        remote_root = remote_root or s.get("ftpMini.remoteRoot", "/html")

    remote_root = (remote_root or "/html").rstrip("/") or "/html"
    if not all([host, user, password]):
        raise SystemExit("FTP host/user/password is empty.")
    return host, user, password, remote_root


KNOWN_REMOTE_DIRS = set()


def get_ftp_connection(host: str, user: str, password: str) -> ftplib.FTP:
    ftp = ftplib.FTP()
    ftp.connect(host, 21, timeout=60)
    ftp.login(user, password)
    ftp.set_pasv(True)
    return ftp


def ensure_remote_dir(ftp: ftplib.FTP, remote_dir: str) -> None:
    if remote_dir in KNOWN_REMOTE_DIRS:
        return
    parts = [p for p in remote_dir.split("/") if p]
    path = ""
    for part in parts:
        path += f"/{part}"
        if path not in KNOWN_REMOTE_DIRS:
            try:
                ftp.cwd(path)
                KNOWN_REMOTE_DIRS.add(path)
            except ftplib.error_perm:
                try:
                    ftp.mkd(path)
                    ftp.cwd(path)
                    KNOWN_REMOTE_DIRS.add(path)
                except ftplib.error_perm:
                    pass
    KNOWN_REMOTE_DIRS.add(remote_dir)


def iter_local_files(local_root: Path, profile: str) -> list[Path]:
    if profile == "full-repo":
        files: list[Path] = []
        for p in local_root.rglob("*"):
            if not p.is_file():
                continue
            rel = p.relative_to(local_root)
            if any(part in SKIP_DIR_NAMES for part in rel.parts):
                continue
            if rel.name in SKIP_FILE_NAMES:
                continue
            files.append(p)
        return sorted(files)

    includes = PROFILE_INCLUDE[profile]
    out: list[Path] = []
    for item in includes:
        path = local_root / item
        if not path.exists():
            print(f"[WARN] missing: {item}")
            continue
        if path.is_file():
            out.append(path)
        else:
            for f in path.rglob("*"):
                if f.is_file():
                    rel = f.relative_to(local_root)
                    if any(part in SKIP_DIR_NAMES for part in rel.parts):
                        continue
                    if rel.name in SKIP_FILE_NAMES:
                        continue
                    out.append(f)
    return sorted(set(out))


def upload_file(ftp: ftplib.FTP, local_file: Path, remote_dir: str) -> None:
    ensure_remote_dir(ftp, remote_dir)
    ftp.cwd(remote_dir)
    with open(local_file, "rb") as fh:
        ftp.storbinary(f"STOR {local_file.name}", fh)


def main() -> int:
    parser = argparse.ArgumentParser(description="Deploy site to Dothome FTP")
    parser.add_argument(
        "--profile",
        choices=["atom-web", "moduirum-legacy", "full-repo"],
        default="atom-web",
        help="Upload scope",
    )
    parser.add_argument(
        "--local-root",
        default=str(Path(__file__).resolve().parent),
        help="Local project root",
    )
    parser.add_argument(
        "--dry-run",
        action="store_true",
        help="List files only, no upload",
    )
    args = parser.parse_args()

    local_root = Path(args.local_root).resolve()
    if not local_root.is_dir():
        raise SystemExit(f"Local root not found: {local_root}")

    host, user, password, remote_root = load_ftp_config()
    files = iter_local_files(local_root, args.profile)

    print(f"Profile     : {args.profile}")
    print(f"Local root  : {local_root}")
    print(f"Remote root : {remote_root}")
    print(f"FTP host    : {host}:21 (FTP/PASV)")
    print(f"Files       : {len(files)}")
    print("-" * 60)

    if args.dry_run:
        for f in files:
            rel = f.relative_to(local_root).as_posix()
            print(f"[DRY-RUN] {rel}")
        return 0

    t0 = time.time()
    ok, fail = 0, 0

    ftp = get_ftp_connection(host, user, password)

    for i, local_file in enumerate(files, 1):
        rel = local_file.relative_to(local_root)
        remote_dir = remote_root if rel.parent == Path(".") else f"{remote_root}/{rel.parent.as_posix()}"
        
        # Retry logic in case of network blips
        uploaded = False
        for attempt in range(3):
            try:
                upload_file(ftp, local_file, remote_dir)
                ok += 1
                uploaded = True
                if i % 20 == 0 or i == len(files):
                    print(f"[{i}/{len(files)}] {rel.as_posix()} -> {remote_dir}/{local_file.name}")
                break
            except Exception as exc:
                print(f"[RETRY {attempt+1}] {rel.as_posix()}: {exc}")
                try:
                    ftp.quit()
                except Exception:
                    pass
                time.sleep(1)
                ftp = get_ftp_connection(host, user, password)
        
        if not uploaded:
            print(f"[FAIL]   {rel.as_posix()}")
            fail += 1

    try:
        ftp.quit()
    except Exception:
        pass
    elapsed = time.time() - t0

    print("-" * 60)
    print(f"Done. success={ok}, fail={fail}, elapsed={elapsed:.1f}s")
    print(f"Check: http://{host}/")
    print(f"Check: http://www.moduirum.com/")
    print(f"Check: http://www.moduirum.com/autonomous/")
    print(f"Check: http://www.moduirum.com/binasea/")
    print(f"Check: http://www.moduirum.com/riteflow/")
    return 0 if fail == 0 else 1


if __name__ == "__main__":
    sys.exit(main())
