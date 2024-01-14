FROM php:8.2-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Install any dependencies your application needs
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_mysql

# Expose port 80 for the web server
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]