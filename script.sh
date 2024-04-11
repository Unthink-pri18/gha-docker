#!/bin/bash
# Fetch the private IP address
PRIVATE_IP=$(curl http://169.254.169.254/latest/meta-data/local-ipv4)

# Write it to the .env file
echo "INSTANCE_PRIVATE_IP=$PRIVATE_IP" > .env

# Now you can run docker-compose up
docker-compose up -d
