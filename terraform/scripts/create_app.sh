#!/bin/bash

# Update the system
echo "Updating the system..."
sudo apt-get update -y
sudo apt-get upgrade -y

# Add the ondrej/php PPA for the latest PHP versions
echo "Adding PHP PPA..."
sudo apt-get install -y software-properties-common
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update -y

# Install PHP 8.2 and necessary extensions
echo "Installing PHP 8.2 and necessary extensions..."

sudo apt-get install -y php php-cli php-fpm php-json php-common php-mbstring php-xml php-curl php-zip php-gd php-intl unzip curl && \
curl -sS https://getcomposer.org/installer | php && \
sudo mv composer.phar /usr/local/bin/composer

# Install Git
echo "Installing Git..."
sudo apt-get install -y git

# Clone the Git repository
echo "Cloning the Git repository..."
GIT_REPO="https://github.com/Louis12345642/malga.git"  # Replace with your Git repository URL
TARGET_DIR="/var/www/malga"  # Target directory for the cloned repository

sudo rm -rf $TARGET_DIR  # Remove the directory if it already exists
sudo git clone $GIT_REPO $TARGET_DIR

# Navigate to the project directory
cd $TARGET_DIR

# Install Composer dependencies
echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Set up Laravel environment
echo "Setting up Laravel environment..."
cp .env.example .env
php artisan key:generate

# Set permissions
echo "Setting permissions..."
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache

# Install Nginx
echo "Installing Nginx..."
sudo apt-get install -y nginx

# Configure Nginx for Laravel
echo "Configuring Nginx for Laravel..."
sudo bash -c 'cat > /etc/nginx/sites-available/my-laravel-app <<EOF
server {
    listen 80;
    server_name _;
    root /var/www/my-laravel-app/public;

    index index.php index.html index.htm;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php\$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;  # Use PHP 8.3 FPM socket
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }

    error_log /var/log/nginx/my-laravel-app_error.log;
    access_log /var/log/nginx/my-laravel-app_access.log;
}
EOF'

# Create a symbolic link to enable the site
sudo ln -s /etc/nginx/sites-available/my-laravel-app /etc/nginx/sites-enabled/

# Remove default Nginx configuration
sudo rm /etc/nginx/sites-enabled/default

# Restart Nginx
echo "Restarting Nginx..."
sudo systemctl restart nginx

echo "Laravel environment setup is complete!"
echo "You can access your Laravel application at http://your-server-ip"
