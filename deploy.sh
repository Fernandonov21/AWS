#!/bin/bash

# Obtén el hostname
HOSTNAME=$(hostname -f)

# Reemplaza {{HOSTNAME}} en el archivo HTML
sed -i "s/{{HOSTNAME}}/$HOSTNAME/g" /var/www/html/index.html
