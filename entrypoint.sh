#!/bin/sh

# Criar pastas de armazenamento e cache se não existirem
mkdir -p /var/www/html/storage/app/public
mkdir -p /var/www/html/storage/framework/cache/data
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/testing
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/bootstrap/cache

# Ajustar permissões para os diretórios necessários
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Verificar permissões
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Iniciar o PHP-FPM
exec php-fpm
