<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.

## A Note Sharing Application

### Author: Paul-Ben Ajene

## Description:
This is a note sharing web application built using Laravel.

# How to Use
- Clone the repository and navigate (cd) into it: `https://github.com/Paul-Ben/notes_share_app.git`

- copy contents of `.env.example` file to `.env file.`
- update the database details in the .env file as
  - `DB_DATABASE= your_Database_name` 
  - `DB_USERNAME=your_username` 
  - `DB_PASSWORD=your_password`
- run the commands: `composer update` and `composer install`
- Next run the command: `php artisan migrate`  to run the database migrations 
- Next , you can seed the database by running this command : `php artisan db:seed`. This will add an admin user and a test user the credentials for both are:
- - `Admin User Email: admin@email.com`
    - `Password : password`
- - `Test User  Email: test@emial.com`
    - `Password : password`
- Next run the command: `php artisan serve` to run the server to serve the project.
- browser url is http://127.0.0.1:8000 to check that the application is running fine.
- visit http://127.0.0.1:8000/register to register a new account
- to view the admin panel, change user status in the database to is_admin.
## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
