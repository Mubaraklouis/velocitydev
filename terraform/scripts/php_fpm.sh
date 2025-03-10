#!/bin/bash
php8.3-fpm -v
sudo apt-get install php8.3-fpm
sudo systemctl status php8.3-fpm
sudo systemctl start php8.3-fpm
sudo systemctl enable php8.3-fpm
sudo nginx -t
sudo systemctl restart nginx
