#!/usr/bin/env bash

echo ""
echo "     #### Beginning provisioning ####"
echo ""

apt-get update

echo ""
echo "     ++++ Installing RabbitMQ ++++"
echo ""

apt-get install -y librabbitmq1 librabbitmq-dev rabbitmq-server amqp-tools
cp /vagrant/.provision/rabbitmq.config.default /etc/rabbitmq/rabbitmq.config
rabbitmq-plugins enable rabbitmq_management

echo ""
echo "     ++++ Installing MongoDB ++++"
echo ""

apt-get install -y mongodb

echo ""
echo "     ++++ Installing PHP ++++"
echo ""

apt-get install -y php5-cli php5-dev php5-curl php5-xdebug
cp /vagrant/.provision/xdebug.ini /etc/php5/mods-available/xdebug.ini

echo ""
echo "    ++++ Adding php mongo support ++++"
echo ""

apt-get install -y php5-mongo

echo ""
echo "    ++++ Adding php ampq support ++++"
echo ""

wget http://pecl.php.net/get/amqp-1.4.0.tgz -O /home/vagrant/amqp.tar.gz
tar -zxvf /home/vagrant/amqp.tar.gz  -C /home/vagrant/
cd /home/vagrant/amqp-1.4.0/
phpize
./configure --with-amqp && make && make install && echo "extension=amqp.so" >> /etc/php5/cli/php.ini
#for remote debug
mkdir /home/vagrant/amqp
wget https://raw.githubusercontent.com/k4Rla/phpstorm/master/stub/amqp.php -O /home/vagrant/amqp/amqp.php

echo ""
echo "    ++++ Installing composer ++++"
echo ""

curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/bin/composer

echo ""
echo "    >>>> Updating project"
echo ""

cd /vagrant
composer update

echo ""
echo "    >>>> Adding phpunit"
echo ""

ln -s /vagrant/vendor/bin/phpunit /usr/bin/phpunit
chmod 755 /usr/bin/phpunit

echo ""
echo "    #### End provision ####"
echo ""