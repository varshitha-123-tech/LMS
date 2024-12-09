# Use the official PHP Apache base image
FROM php:7.4-apache

# Copy all project files to the Apache web directory
COPY . /var/www/html/

# Set permissions for the web directory
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 for the web server
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]

RUN docker-php-ext-install mysqli
