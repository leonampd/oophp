FROM php:5.6-apache

RUN apt-get update && \
    apt-get install -y \
        mysql-client \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install -j$(nproc) pdo_mysql

EXPOSE 80