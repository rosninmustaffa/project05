# Use the official PHP image with Apache
FROM php:7.4-apache
WORKDIR /var/www/html/
# Install mysqli extension
RUN docker-php-ext-install mysqli
# Copy the backend files to the container
COPY . .