<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About lara9interia

It is a Laravel 9 Vue3 Inertia JS based demo project showing the basics of inertia js. Authentication, Authorization, Routing, form submittion and data binding. It will help begineers to understand "how to start with inertia JS". Build with love and passon and also its open source for web artisans.

1. Laravel 9
2. Vue 3
3. Inertia JS
4. Tailwind CSS 3
5. laravel/breeze
6. Authentication
7. Authorization

## Getting Started Step by Step
1. In your root folder, clone the project file using git clone https://github.com/rafi021/lara9inertia.git
2. Open terminal (bash/cmd). Then go to project folder using command

```sh
cd lara9inertia
```

3. Then install required files and libraries using 

```sh
composer install
```

4. Then create a .env file and generate key for this project using command 

```sh
cp .env.example .env

php artisan key:generate
```

5. Then compile all CSS & JS files together using this command

```sh
npm install && npm run dev
```

or

```sh
yarn install && yarn run dev
```
6. Create a database in MYSQL and connect it with your project via updating .env file.
7. After connecting the db with project, then run command 

```sh
php artisan migrate:fresh --seed
```

After completing the migration and seeding of db, you will have 2 user ready for login in this project. 
A.  Admin -> Admin
    Email -> admin@example.come
    Pass -> 1234

B.  User -> User
    Email -> user@example.come
    Pass -> 1234

Finally we are ready to run our project using this command 

```sh
php artisan serve 
```
in one terminal and also run

```sh
npm run watch 
```
 on another terminal for compiling js and css. 
