FROM php:7.4-cli

RUN apt-get update && apt-get install -y \
    zip \
    unzip
RUN pecl install xdebug-3.1.0 \
    && docker-php-ext-enable xdebug

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app
