# Use the official image for Apache HTTP Server with PHP
FROM php:7.4-apache

# Copy the index.php file to the document root
COPY index.php /var/www/html/

# Ensure mod_rewrite is enabled for Apache (optional, if needed)
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
