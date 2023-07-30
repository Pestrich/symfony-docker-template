FROM php:8.2-fpm

MAINTAINER Pestrich <bnm9229bnm@yandex.ru>

# Clear working directory
RUN rm -rf /var/www && mkdir -p /var/www

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    zip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy bin/console
COPY ./bin/console ./bin/

# Copy config
COPY ./config/* ./config/

# Copy public/index.php
COPY ./public/index.php ./public/

# Copy src/Kernel.php
COPY ./src/Kernel.php ./src/

# Copy .env
COPY ./.env ./

# Copy composer.lock, composer.json and symfony.lock
COPY ./composer.* ./symfony.lock ./

# Copy composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Composer install
RUN composer install

# Hack: link 'sh' to 'bash'
RUN ln -sf /bin/bash /bin/sh

CMD ["php-fpm"]
