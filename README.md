# Laravel Project

<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

## About

This project is built with [Laravel](https://laravel.com/), a modern PHP framework for web applications with expressive syntax. It includes features like:

- Fast routing engine
- Database ORM (Eloquent)
- Schema migrations
- Middleware & authentication
- Queue jobs & broadcasting
- Session and cache management

---

## Requirements

- PHP >= 8.1
- Composer
- MySQL / MariaDB
- Node.js & NPM (for frontend assets)

---

## Installation

1. Clone Repository
git clone <repository-url> project-name
cd project-name

2. Install Dependencies
composer install
npm install

3. Copy .env File
cp .env.example .env

APP_NAME=ProjectName
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=your_db_password


4. Generate Application Key
php artisan key:generate
 
5. Run Migrations
php artisan migrate

6. Start Development Server
php artisan serve
