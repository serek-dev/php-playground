# Raw PHP playground | serek.dev

This repository is part of [serek.dev](https://serek.dev) tech blog and contains minimalistic PHP Slim APP, just for local experiments. 

![Logo](https://serek.dev/wp-content/uploads/2022/11/logo-transp.png)

## Stack & Requirements

- PHP 8.1
- Composer 2.0
- Docker
- Docker-compose
- Slim 4

## Development

```bash
git clone https://github.com/serek-dev/php-playground.git
docker-compose up --force-recreate --build
docker-compose down --remove-orphans
```

On success, website should be served on: `http://localhost:8888/`
