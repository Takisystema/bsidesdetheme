#!/usr/bin/env bash

debconf-set-selections <<< 'mysql-server mysql-server/root_password password abcd1234'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password abcd1234'
apt-get update
apt-get install -y apache2 mysql-server php libapache2-mod-php php-mcrypt php-mysql

echo "GRANT ALL ON *.* TO 'root'@'%' IDENTIFIED BY 'abcd1234';FLUSH PRIVILEGES;CREATE DATABASE wp;" | mysql -uroot -pabcd1234
cp /etc/mysql/mysql.conf.d/mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf.bak
sed -i 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mysql.conf.d/mysqld.cnf
sed -i 's/www-data/ubuntu/g' /etc/apache2/envvars
service mysql restart
service apache2 restart
