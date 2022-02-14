#/bin/bash
php artisan route:clear
php artisan view:clear
php artisan config:clear
php artisan cache:clear
php artisan optimize
php artisan route:cache
php artisan config:cache
