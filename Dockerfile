# Dockerfile
FROM php:8.2-apache

# Install required modules and tools
RUN apt-get update && apt-get install -y \
    nano \
    && docker-php-ext-install opcache

# Enable Apache modules for directory listing and rewrite rules
RUN a2enmod rewrite headers dir

# Copy custom Apache configuration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Set up working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80
