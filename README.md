# GameTopup Laravel Platform

## Features
- AdminLTE admin panel with sidebar
- User side responsive theme
- 3D style game/package cards
- Games, packages, provider/API settings
- Banner and YouTube video management
- Wallet recharge with Razorpay
- Purchase via wallet or direct Razorpay
- Mock/generic provider API layer
- Orders, payment transactions, webhooks, logs

## Run
Create database `gaming_app`, then:
```bat
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve
```

Admin: admin@example.com / password
User: user@example.com / password

Provider settings: /admin/providers
