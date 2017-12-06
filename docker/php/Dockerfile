FROM php:7-fpm-alpine

MAINTAINER Nacho Salvador <nachosalvador83@gmail.com>

RUN apk add --no-cache bash curl && rm -Rf /var/cache/apk/*

RUN curl https://getcomposer.org/download/1.5.1/composer.phar > /usr/local/bin/composer && chmod 755 /usr/local/bin/composer

COPY php-fpm.conf /etc/php7/

EXPOSE 9000

CMD ["php-fpm"]