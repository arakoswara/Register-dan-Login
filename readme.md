## Contoh Multiple Auth Laravel 5.1

* Buat database dengan nama rest-laravel (atau sesuaikan dengan keinginan bisa dilihat di file .env)
* Silahkan lakukan migrate untuk database yang diperlukan.
* Pada kasus ini role yang digunakan : admin dan visitor
* file-file yang ditambahkan
1. Controller (HomeController, UserController, AdminController, VisitorController)
2. Model (User, Role, RoleUser)
3. Request (AdminLoginRequest, RegisterRequest)
4. Middleware (AuthAdmin, RoleMiddleware)
5. View (
	a. auth (login, register)
	b. admin (index)
	c. visitor (index)
	d. master-home)

* file-file yang dimodifikasi
1. Kernel.php
2. Middleware(RedirectIfAuthenticated)
3. routes.php
4. .env


## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
