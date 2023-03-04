FROM ctftraining/base_image_nginx_mysql_php_73

COPY ./files /tmp/
RUN cp -rf /tmp/html /var/www/ \
    && chown -R www-data:www-data /var/www/html
