FROM php:5.6.30-fpm-alpine

RUN docker-php-ext-install mysql mysqli pdo pdo_mysql && \
    docker-php-ext-enable mysql && \
    docker-php-ext-enable mysqli

# Cài đặt Nginx
# RUN apk add --no-cache nginx

WORKDIR /var/www/html/service1

# Sao chép tệp cấu hình Nginx vào container
# COPY nginx_service1.conf /etc/nginx/conf.d/
COPY . /var/www/html/service1