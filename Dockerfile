FROM php:8.1-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy your PHP code to container
COPY . /var/www/html/

# Enable apache rewrite mod if needed
RUN a2enmod rewrite


