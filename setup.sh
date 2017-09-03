#!/usr/bin/env bash

debconf-set-selections <<< 'mysql-server mysql-server/root_password password abcd1234'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password abcd1234'
apt-get update
apt-get install -y apache2 mysql-server php libapache2-mod-php php-mcrypt php-mysql
