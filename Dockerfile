FROM nginx:1.19.7-alpine
LABEL maintainer="Michael van Zanten <michael.vanzanten@hu.nl>"

 COPY .conf/blocklistform  /usr/share/nginx/html
 EXPOSE 80