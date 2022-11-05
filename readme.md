# Raw PHP playground | serek.dev

This repository is part of [serek.dev](https://serek.dev) tech blog and contains minimalistic PHP Slim APP, just for local experiments. 

![Logo](https://serek.dev/wp-content/uploads/2022/11/logo-transp.png)

## Stack & Requirements

![Technology](https://img.shields.io/badge/php-8.1-brightgreen)
![Package manager](https://img.shields.io/badge/Composer-2.0-lightgrey)
![Framework](https://img.shields.io/badge/Slim%20Framework-4-red)
![Docker](https://img.shields.io/badge/Docker--compose-3.6-lightgrey)

* PHP 8.1 
* Composer 2.0
* Slim Framework 4.0
* Docker + Compose 3.6

## Development

```bash
git clone https://github.com/serek-dev/php-playground.git
docker-compose up --force-recreate --build
docker-compose down --remove-orphans
```

On success, website should be served on: `http://localhost:8888/`

## Read more

https://serek.dev/posts/dockerizing-slim-4-application/
