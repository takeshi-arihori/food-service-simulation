## Docker 手順

- 開発環境

```
Web サーバ： Nginx 1.25.0
データベース： MySQL 8.0
言語： PHP 8.1
```

- [参考](https://qiita.com/shikuno_dev/items/f236c8280bb745dd6fb4)

## プロジェクト構成

```
.
├── docker/
│   ├── mysql/
│   │   └── my.cnf
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       ├── Dockerfile
│       └── php.ini
├── src/
│   └── index.php
├── docker-compose.yml
└── .env
```
