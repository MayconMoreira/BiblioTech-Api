FROM phpdockerio/php:8.2-fpm

RUN apt-get update

RUN apt-get -y --no-install-recommends install \
    git \
    php8.2-cli \
    php8.2-dev \
    php8.2-fpm \
    php8.2-curl \
    php8.2-mysql \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-xdebug \
    php8.2-zip

ENV PHP_MEMORY_LIMIT=3072M

WORKDIR /var/www/html
