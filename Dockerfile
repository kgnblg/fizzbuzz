########################################################################
### Composer

FROM composer:1.10 AS composer

COPY composer.json /app
COPY composer.lock /app

RUN composer install        \
    --ignore-platform-reqs  \
    --no-ansi               \
    --no-autoloader         \
    --no-interaction        \
    --no-scripts

COPY . /app/
RUN composer dump-autoload --optimize --classmap-authoritative

### Composer
########################################################################
### PHP

FROM php:7.4-apache

COPY . /var/www/html
COPY --from=composer /app/vendor /var/www/html/vendor

WORKDIR /var/www/html
EXPOSE 80

### PHP
########################################################################