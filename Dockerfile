FROM php:8.1-apache

# Copy all files
COPY . /var/www/html/

# Enable mod_rewrite
RUN a2enmod rewrite

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port
EXPOSE 80

# Start command
CMD ["apache2ctl", "-D", "FOREGROUND"]

