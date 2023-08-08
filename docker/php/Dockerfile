FROM php:8.2-fpm

RUN apt-get update \
      && apt-get -y --no-install-recommends install \
        libzip-dev \
        libicu-dev \
        libpq-dev \
        unzip \
        git \
        curl

  # PDO PostgreSQL
RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-enable pdo_pgsql

  # Igbinary
RUN pecl install igbinary
RUN docker-php-ext-enable igbinary

  # INTL
RUN docker-php-ext-install intl
RUN docker-php-ext-enable intl

  # APCU
RUN pecl install apcu
RUN docker-php-ext-enable apcu

  # Zip
RUN docker-php-ext-install zip
RUN docker-php-ext-enable zip

  # Opcache
RUN docker-php-ext-install opcache

  # Sockets
RUN docker-php-ext-install sockets

## mongodb
RUN pecl install mongodb && docker-php-ext-enable mongodb
# RUN echo "extension=mongodb.so" >> /usr/local/etc/php/php.ini
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/project
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -sS https://get.symfony.com/cli/installer | bash


