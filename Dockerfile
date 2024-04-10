# Use the official httpd image as a parent image
FROM httpd:latest

# Copy the local index.html file to the directory where httpd serves files
COPY index.html /usr/local/apache2/htdocs/

# The default httpd image exposes port 80, so no need to explicitly EXPOSE it
