#!/bin/sh

# Generate app key if not exists
if [ ! -f .env ]; then
    cp .env.example .env
fi

php artisan key:generate
php artisan storage:link
php artisan optimize:clear
php artisan optimize

exec "$@"
