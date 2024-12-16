FROM nginx:1.27.3-alpine-slim

WORKDIR /usr/share/php
COPY  . .

EXPOSE 80

CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]