# Usar una imagen base de PHP con soporte para Nginx
FROM php:8.1-apache

# Copiar el archivo PHP dentro del contenedor
COPY index.php /var/www/html/

# Exponer el puerto 80 para acceder al servidor web
EXPOSE 80

# Habilitar el módulo de reescritura de Apache
RUN a2enmod rewrite
