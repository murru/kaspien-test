# Kaspien Test - Ernesto Murrugarra (Baires Dev)

This project was bootstrapped with [Laravel](https://laravel.com).

## Requirements

* Composer to keep all libraries we need.
* PHP >= 7.4.21
* Database with MariaDB 10.5.10

## Run Project

### Kaspien Test

In the project directory, you can run:

### `composer install`
### `mv .env.example .env`
### `php artisan key:generate`
### `php artisan config:cache`
### `php artisan migrate`

This will install all dependencies requires, create basic configuration for laravel and create the database tables. Then to run the application:

### `php artisan serve`

Open [http://localhost:8000](http://localhost:8000) to view it in the browser.
