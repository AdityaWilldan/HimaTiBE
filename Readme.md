
# Hima TI UM Web

HimaTIBe merupakan Repsitory website HimaTI Universitas Mandiri (organisasi yang menaungi mahasiswa teknik informatika)
website ini dibuat untuk mempermudah Penyebaran Informasi dari HimaTI sendiri, Bersifat Open Source dan di kembangkan oleh departemen Litbang(penelitian dan pengembangan)
## Installation

Install this project with Composer

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');
```
Install laravel using the composer package

```bash
composer create-project laravel/laravel:^10.0 example-app
cd project
cp .env.example .env
```
After Install laravel, create table `himati` in SQL DBMS
and migrate databases

```bash
php artisan migrate
```    
 run Locally project

```bash
php artisan Serve
```    
## Screenshots

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)


## Features

- CRUD artikel for Admin Web
- Tech artikel api 'https://www.okezone.com/'
- Quote API game
- Dialogflow Botchat
- Coment system with `Disqus`


## Tech Stack

**Client:** Blade, Bootsrap, Javascript Library, TailwindCSS

**Server:** PHP/Laravel

