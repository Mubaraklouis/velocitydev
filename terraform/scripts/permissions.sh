#!/bin/bash

# Define the Laravel project directory
LARAVEL_DIR="/var/www/malga"

# Fix ownership of the storage directory
echo "Fixing ownership of the storage directory..."
sudo chown -R www-data:www-data $LARAVEL_DIR/storage

# Fix permissions of the storage directory
echo "Fixing permissions of the storage directory..."
sudo find $LARAVEL_DIR/storage -type d -exec chmod 775 {} \;
sudo find $LARAVEL_DIR/storage -type f -exec chmod 664 {} \;

# Fix permissions for specific directories
echo "Fixing permissions for framework, logs, and views..."
sudo chmod -R 775 $LARAVEL_DIR/storage/framework
sudo chmod -R 775 $LARAVEL_DIR/storage/logs
sudo chmod -R 775 $LARAVEL_DIR/storage/framework/views

# Clear Laravel cache
echo "Clearing Laravel cache..."
php $LARAVEL_DIR/artisan cache:clear
php $LARAVEL_DIR/artisan config:clear
php $LARAVEL_DIR/artisan view:clear
php $LARAVEL_DIR/artisan route:clear

# Rebuild Laravel cache
echo "Rebuilding Laravel cache..."
php $LARAVEL_DIR/artisan config:cache
php $LARAVEL_DIR/artisan route:cache
php $LARAVEL_DIR/artisan view:cache

echo "Permissions and cache have been fixed. Please test your application."
