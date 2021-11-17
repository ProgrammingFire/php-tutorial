FROM geerlingguy/php-apache:latest

RUN rm /var/www/html/index.html
COPY . /var/www/html/