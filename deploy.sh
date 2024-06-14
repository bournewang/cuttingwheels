#!/bin/bash

# Define source and destination directories
SRC_DIR="dist"
REMOTE_USER="ubuntu"
REMOTE_HOST="15.165.142.225"
REMOTE_DIR="/var/www/html/cuttingwheels"
PRIVATE_KEY="~/key/aws-mbp.pem"

# Check if the source directory exists
if [ ! -d "$SRC_DIR" ]; then
  echo "Source directory $SRC_DIR does not exist. Exiting..."
  exit 1
fi

# Use rsync to copy the contents of the dist folder to the remote server
echo "Deploying files from $SRC_DIR to $REMOTE_USER@$REMOTE_HOST:$REMOTE_DIR..."
rsync -avz -e "ssh -i $PRIVATE_KEY" --delete "$SRC_DIR/" "$REMOTE_USER@$REMOTE_HOST:$REMOTE_DIR"

# Set appropriate permissions on the remote server (optional)
# echo "Setting permissions on remote server..."
# ssh -i "$PRIVATE_KEY" "$REMOTE_USER@$REMOTE_HOST" "chgrp -R www-data $REMOTE_DIR"

echo "Deployment completed successfully."

