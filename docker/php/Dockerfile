FROM php:8.1.1-fpm

WORKDIR /var/www/symfony-k8s-app/

CMD ["php-fpm", "-F"]

COPY --chown=www-data:www-data . /var/www/symfony-k8s-app/

USER www-data