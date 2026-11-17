FROM php:8.3-apache

LABEL org.opencontainers.image.source="https://github.com/FoxxoOwO/kinklist"
LABEL org.opencontainers.image.description="KinkList PHP + SQLite web app"

RUN a2enmod rewrite \
    && sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

RUN mkdir -p /var/www/data && chown -R www-data:www-data /var/www/data

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

ENV DB_PATH=/var/www/data/kinklist.sqlite
