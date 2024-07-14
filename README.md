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
- Next run the command: `php artisan serve` to run the server to serve the project.
- browser url is http://127.0.0.1:8000 to check that the application is running fine.
- visit http://127.0.0.1:8000/register to register a new account

## Image Views

![Screenshot from 2024-07-13 21-14-41](https://github.com/user-attachments/assets/1cc65ef8-33eb-4e48-8739-c56ceec3e67b)
![Screenshot from 2024-07-13 21-15-23](https://github.com/user-attachments/assets/3304cb9c-184c-4c49-ae23-ca01b5b87302)
![Screenshot from 2024-07-13 21-15-41](https://github.com/user-attachments/assets/b1add54a-41b9-4a97-8630-31d6a7b80c2e)
![Screenshot from 2024-07-13 21-15-54](https://github.com/user-attachments/assets/46e29845-8316-4be6-9715-ffc4af760890)
![Screenshot from 2024-07-13 21-16-18](https://github.com/user-attachments/assets/791446b0-f1ae-483a-a72e-f82568da9638)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
