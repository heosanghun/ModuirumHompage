#!/usr/bin/env python
# -*- coding: utf-8 -*-
"""Upload MODUIRUM site to Dothome FTP (/html)."""

import ftplib
import json
from pathlib import Path

LOCAL_ROOT = Path(__file__).resolve().parent
SETTINGS_PATH = LOCAL_ROOT / "settings.json"
if not SETTINGS_PATH.exists():
    SETTINGS_PATH = LOCAL_ROOT / "settings.example.json"
SKIP_DIRS = {".git", "node_modules", ".agents", "__pycache__"}
SKIP_FILES = {".env", ".gitignore", "upload_to_dothome.py", "settings.json"}


def load_settings():
    with open(SETTINGS_PATH, "r", encoding="utf-8") as f:
        settings = json.load(f)
    return (
        settings.get("ftpMini.host", ""),
        settings.get("ftpMini.username", ""),
        settings.get("ftpMini.password", ""),
        settings.get("ftpMini.remoteRoot", "/html").rstrip("/") or "/html",
    )


def ensure_remote_dir(ftp: ftplib.FTP, remote_path: str) -> None:
    parts = [p for p in remote_path.split("/") if p]
    current = ""
    for part in parts:
        current = f"{current}/{part}" if current else f"/{part}"
        try:
            ftp.cwd(current)
        except ftplib.error_perm:
            ftp.mkd(current)
            ftp.cwd(current)


def should_skip(rel: Path) -> bool:
    if any(part in SKIP_DIRS for part in rel.parts):
        return True
    if rel.name in SKIP_FILES or rel.suffix == ".sample":
        return True
    return False


def upload_tree(ftp: ftplib.FTP, local_root: Path, remote_root: str) -> int:
    uploaded = 0
    for local_file in sorted(local_root.rglob("*")):
        if not local_file.is_file():
            continue
        rel = local_file.relative_to(local_root)
        if should_skip(rel):
            continue

        remote_file = f"{remote_root}/{rel.as_posix()}"
        remote_dir = "/".join(remote_file.split("/")[:-1])
        ensure_remote_dir(ftp, remote_dir)

        print(f"Uploading: {rel.as_posix()}")
        with open(local_file, "rb") as fh:
            ftp.storbinary(f"STOR {rel.name}", fh)
        uploaded += 1

    return uploaded


def main():
    host, user, password, remote_root = load_settings()
    if not all([host, user, password]):
        raise SystemExit("FTP settings missing in settings.json")

    print(f"Connecting to {host} ...")
    ftp = ftplib.FTP(host)
    ftp.login(user, password)
    ftp.set_pasv(True)

    count = upload_tree(ftp, LOCAL_ROOT, remote_root)
    ftp.quit()

    print(f"\nDone. Uploaded {count} files.")
    print(f"Site URL: http://{host}/")


if __name__ == "__main__":
    main()
