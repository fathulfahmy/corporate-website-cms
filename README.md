# IICE Site Local Development Guide
## Requirements
1. PHP
2. Composer
3. NPM
4. MySQL
5. Mailpit

## Setup
1. Install packages
```sh
composer install
npm install
npm run build
```

2. Create `.env` based on `.env.example`
```
DB_USERNAME=your-mysql-user
DB_PASSWORD=your-mysql-user-password
```

3. Create and insert data to MySQL database
```sh
php artisan migrate
```

4. Create new admin user
```sh
php artisan make:filament-user
```

## Testing
1. Run local web server
```sh
php artisan serve
```

2. Run local mail server
```sh
mailpit
```

- Website: http://127.0.0.1:8000
- Admin: http://127.0.0.1:8000/admin