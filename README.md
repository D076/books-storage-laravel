# Test project Cyberia
The project uses PHP 8 + Laravel 9.

## ToDo
1. Админ панель
   1. ~~Реализовать CRUD~~
       - ~~Книги~~
       - ~~Книжные жанры~~
       - ~~Авторы~~
   2. ~~Вывести список жанров.~~
   3. ~~Вывести список авторов с указанием количества книг.~~
   4. ~~Вывести список книг с указанием имени автора и жанров.~~
2. API
   - ~~Запрос на авторизацию пользователя.~~
   - ~~Получение списка книг с именем автора, авторизация не обязательна.~~
   - ~~Получение данных книги по id, авторизация не обязательна.~~
   - ~~Обновление данных книги, авторизация под автором книги обязательна.~~
   - ~~Удаление книги, авторизация под автором книги обязательна.~~
   - ~~Получение списка авторов с указанием количества книг, авторизация не обязательна.~~
   - ~~Получение данных автора со списком книг, авторизация не обязательна.~~
   - ~~Обновление данных автора, авторизация под  автором обязательна (можно обновлять только свои данные).~~
3. Другое
   - ~~Добавить middleware к админ панели~~
   - ~~Добавить middleware к API~~

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

To access the admin panel register new user and change on "User" table in your db field "role" to "0".

You can to log in via api through 'api/login', and use authorization with bearer token.
