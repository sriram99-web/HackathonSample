FROM php:7.2-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html

WORKDIR /var/www/html

EXPOSE 80