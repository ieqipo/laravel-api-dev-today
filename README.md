##[PHP test assessment by DevelopsToday v1.1 15-12-2021](https://develops.notion.site/PHP-test-assessment-by-DevelopsToday-v1-1-15-12-2021-113d24c027aa459196647f654d0e00c2)

##How to use

This project was developed on linux ubuntu. 

Clone this project to your folder on linux: 
```sh
git clone https://github.com/ieqipo/laravel-api-dev-today.git
```
Go to cloned root directory:
```sh
cd laravel-api-dev-today
```
Run composer:
```sh
composer install --ignore-platform-reqs
```
Run sail. This is like a wrapper for docker-compose:
```sh
./vendor/bin/sail up -d
```
Generate key:
```sh
./vendor/bin/sail artisan key:generate
```
Make migration to run datebase:
```sh
./vendor/bin/sail artisan migrate
```

##[Postman collection link](https://www.getpostman.com/collections/da408cd5a58fa66bef60)


##Api developed on Laravel:

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

