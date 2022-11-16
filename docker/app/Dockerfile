FROM php:8.1.8-fpm-alpine

# Missing packages for alpine
# https://stackoverflow.com/questions/19816275/no-acceptable-c-compiler-found-in-path-when-installing-python
RUN apk add autoconf build-base
RUN pecl install xdebug-3.1.0
COPY ./docker/app/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
RUN	docker-php-ext-enable xdebug

COPY . /app
WORKDIR /app

COPY --from=composer:2.0 /usr/bin/composer /usr/local/bin/composer

COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
    --no-plugins \
    --no-scripts \
    --prefer-dist

COPY . .
RUN composer --version
