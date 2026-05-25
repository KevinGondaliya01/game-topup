@echo off
if not exist bootstrap\cache mkdir bootstrap\cache
if not exist storageramework\cache\data mkdir storageramework\cache\data
if not exist storageramework\sessions mkdir storageramework\sessions
if not exist storagerameworkiews mkdir storagerameworkiews
if not exist storage\logs mkdir storage\logs
composer install
if not exist .env copy .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve
pause
