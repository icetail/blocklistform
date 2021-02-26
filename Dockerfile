FROM nginx:1.19.7-alpine
LABEL maintainer="Michael van Zanten <michael.vanzanten@hu.nl>"

RUN apk -U update && \
    apk -U upgrade && \
    apk -U add --no-cache \
        php7 \
        php7-pdo_mysql \
        php7-pgsql \
        php7-pdo_pgsql \
        php7-sqlite3 \
        php7-pdo_sqlite \
        mysql-client \
        php7-fpm \
        php7-curl \
        php7-dom \
        php7-gettext \
        php7-xml \
        php7-simplexml \
        php7-zip \
        php7-zlib \
        php7-gd \
        php7-openssl \
        php7-mysqli \
        php7-pdo

COPY .conf/blocklistform  /usr/share/nginx/html
EXPOSE 80