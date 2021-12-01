#!/bin/bash

apt-get install composer php-imagick phpmyadmin php-mbstring mysql-server -y
composer require picqer/php-barcode-generator
