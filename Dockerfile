FROM php:8.1-fpm


RUN apt-get update && apt-get install -y nginx libzip-dev zip unzip && docker-php-ext-install pdo_mysql zip


WORKDIR /var/www/html


COPY . .


RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --optimize-autoloader \
    && rm composer-setup.php


RUN chown -R www-data:www-data storage bootstrap/cache && chmod -R 775 storage bootstrap/cache


COPY ./nginx.conf /etc/nginx/conf.d/default.conf


EXPOSE 8080


CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]