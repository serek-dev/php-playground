# sebek.dev - php playground

This repository is part of [sebek.dev](https://sebek.dev/posts/symfony/validator/conditional-validation/)
tech blog maintained by Sebastian Twaróg.

Treat is as a playground for our experiments in posts on the website.

## Stack & Requirements

- PHP 8.1
- Composer 2.0
- Docker
- Docker-compose
- Slim 4

## Development

```bash
gtt clone https://github.com/stwarog/php-playground.git
docker-compose up --force-recreate --build
docker-compose down --remove-orphans
```

On success, website should be served on: `http://localhost:8888/`
