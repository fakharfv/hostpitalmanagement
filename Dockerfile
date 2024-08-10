# Use the official PHP image with Apache
FROM php:8.1-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Copy the application files
COPY . .

# Install Composer and dependencies
RUN curl -sS https://getcomposer.org/installer | php \
    && php composer.phar install --no-dev --optimize-autoloader

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
