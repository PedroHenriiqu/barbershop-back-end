#!/usr/bin/env bash
echo "Cache de config"
php artisan config:cache

echo "Cache de rotas"
php artisan route:cache

echo "Rodando migrations"
php artisan migrate --force