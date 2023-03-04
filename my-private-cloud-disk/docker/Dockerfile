FROM ctftraining/base_image_nginx_mysql_php_73
COPY ./files /tmp/
COPY ./readflag.c /readflag.c
COPY ./flag /flag
RUN apk add gcc g++ make cmake gfortran libffi-dev openssl-dev libtool
RUN chmod 0400 /flag && chown root:root /flag
RUN chmod 0444 /readflag.c && gcc /readflag.c -o /readflag
RUN chown root:root /readflag && chmod 4555 /readflag
RUN cp -rf /tmp/html /var/www/ \
    && chmod 400 /flag \
    && chown -R www-data:www-data /var/www/html

