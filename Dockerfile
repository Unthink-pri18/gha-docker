FROM httpd:latest

# Install dependencies for PHP
RUN apt-get update && \
    apt-get install -y php libapache2-mod-php && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Copy the PHP script to the htdocs directory
COPY index.php /usr/local/apache2/htdocs/

EXPOSE 80
