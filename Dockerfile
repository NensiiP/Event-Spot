FROM php:8.1-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Copy everything to Apache root
COPY . /var/www/html/

# Set correct permissions (optional, useful for uploads etc.)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
