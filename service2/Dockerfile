FROM php:5.6.30-fpm-alpine
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql && docker-php-ext-enable mysql && docker-php-ext-enable mysqli
COPY . /var/www/html/service2
WORKDIR /var/www/html/service2
