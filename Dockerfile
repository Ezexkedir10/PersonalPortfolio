# Use the official PHP Apache image
FROM php:8.2-apache

# Enable Apache mod_rewrite (if your project uses it)
RUN a2enmod rewrite

# Copy all project files to Apache server root
COPY . /var/www/html/

# Optional: Set ownership and permissions
RUN chown -R www-data:www-data /var/www/html

# Expose default Apache port
EXPOSE 80
