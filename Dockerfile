FROM php:8.1-fpm
WORKDIR /var/www
RUN apt-get update \
  && apt-get install -y libonig-dev zip unzip git curl \
  && docker-php-ext-install pdo_mysql mbstring
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . .
RUN composer install --no-dev --optimize-autoloader
