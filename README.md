# MODUIRUM Homepage

MODUIRUM 공식 홈페이지 및 허상훈 대표 온라인 명함(`hsh.php`) 소스입니다.

## Live Site

- **Company:** http://www.moduirum.com/
- **Profile:** http://www.moduirum.com/hsh.php

> 현재 닷홈 호스팅 SSL 미설정으로 **HTTP**로 접속해야 합니다. (`https://`는 접속 불가)

## Structure

```text
├── index.html                      # Main landing page
├── physical_ai_data_factory.html   # Physical AI Data Factory
├── hsh.php                         # CEO online business card
├── assets/images/                  # Main site images
├── images/                         # Profile page images
├── screens/                        # Additional screens
├── upload_to_dothome.py            # Deploy to Dothome FTP
└── settings.example.json           # FTP config template
```

## Local Preview

```bash
npm run dev
# http://localhost:3000
```

## Deploy to Dothome

1. Copy `settings.example.json` to `settings.json` and fill in FTP credentials.
2. Run:

```bash
python upload_to_dothome.py
```

## Tech Stack

- HTML + Tailwind CSS (CDN)
- PHP 7.4+ (`hsh.php`, mail handlers)
- Static assets on Dothome hosting
