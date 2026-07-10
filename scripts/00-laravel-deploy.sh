#!/usr/bin/env bash
echo "Rodando composer"
composer install --no-dev --working-dir=/var/www/html

echo "Gerando a chave da aplicacao (se ainda nao existir)"
php artisan key:generate --force

echo "Cache de config"
php artisan config:cache

echo "Cache de rotas"
php artisan route:cache

echo "Rodando migrations"
php artisan migrate --force
