#!/bin/bash
sudo apt update -y 
sudo apt upgrade -y
sudo apt install nginx -y
sudo mv /var/www/html/nginx-default /etc/nginx/sites-available/default
sudo ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default
sudo systemctl enable nginx
sudo systemctl restart nginx
sudo apt install php php-fpm php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip -y
