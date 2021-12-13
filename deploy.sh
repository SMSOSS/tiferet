#!/bin/bash

echo "Deploying to $(hostname -I):8080"
php -S $(hostname -I):8080

echo ""
#echo "Deployed website to $(hostname -I):8080"
