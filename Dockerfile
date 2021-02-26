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
        mysql-client

COPY .conf/blocklistform  /usr/share/nginx/html
EXPOSE 80