# Test project Cyberia
The project uses PHP 8 + Laravel 9.

## Installation

```bash
git clone https://github.com/D076/books-storage-laravel.git
composer install
```
Create and configure .env file and your database before migration.
```bash
php artisan migrate
```

```bash
php artisan serve
```

## Other
You can use MySQL dump in folder "sql-dump". Passwords for all users is "password".

You may to log in via api through 'api/login', and use authorization with bearer token.
