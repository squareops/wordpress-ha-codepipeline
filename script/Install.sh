#!/bin/bash
sudo apt update -y 
sudo apt upgrade -y
sudo apt install nginx -y
sudo systemctl enable nginx
sudo systemctl start nginx
sudo touch /home/ubuntu/riya.txt
sudo apt install php php-fpm php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip -y
