## Composer
FROM composer:1.8 AS composer

COPY composer.* /app/

ENV APP_ENV prod
RUN composer install --no-dev --optimize-autoloader

##

FROM php:7.2-apache as apache

ENV APP_ENV prod

RUN docker-php-ext-install pdo pdo_mysql opcache \
 && a2enmod rewrite \
 && sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

COPY --from=composer /app /var/www/html
COPY . /var/www/html

WORKDIR /var/www/html

RUN chmod -R 550 . && chown -R www-data:www-data . && php bin/console cache:clear --env=prod --no-debug