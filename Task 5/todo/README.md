<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Installation Steps

1. Install Laravel
   Run the following command to install a fresh Laravel project:

```bash
laravel new todo
```

2. Install Vue.js Support
   To set up Vue.js in your Laravel project, run:

```bash
composer require laravel/ui
```

3. Set Up Vue with Authentication
   Initialize Vue.js and add authentication scaffolding:
```bash
php artisan ui vue --auth
```

4. Install NPM Dependencies
   Install the necessary JavaScript dependencies:

```bash
npm install
```

5. Build Assets
   Compile the assets with:
```bash
npm run dev
```
6. Start Laravel Server
   Run the application using Laravel's built-in development server:
```bash
php artisan serve
```

Database Setup
Make sure to configure your .env file with your database connection details. Then, run the following command to migrate the database:
```bash
php artisan migrate

```

## Laravel Sponsors



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
