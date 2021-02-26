FROM php:7.4.15-apache
LABEL maintainer="Michael van Zanten <michael.vanzanten@hu.nl>"

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY .conf/blocklistform  /var/www/html/
EXPOSE 80