FROM php:7.3-apache

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update

# Vim
RUN apt-get install -y vim

RUN apt-get install -y git
