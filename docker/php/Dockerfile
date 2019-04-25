# ./docker/php/Dockerfile
FROM php:7.2-fpm

RUN apt-get update && apt-get install -y zip zlib1g-dev

RUN docker-php-ext-install zip

WORKDIR /usr/src/apps/php-test

RUN PATH=$PATH:/usr/src/apps/php-test/vendor/bin:bin