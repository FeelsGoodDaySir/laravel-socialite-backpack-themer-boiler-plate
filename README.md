[![Build Status](https://travis-ci.com/FeelsGoodDaySir/laravel-socialite-backpack-themer-boilerplate.svg?branch=main)](https://travis-ci.com/FeelsGoodDaySir/laravel-socialite-backpack-themer-boilerplate)

## Requirement
- npm
- composer
- PHP
- MySQL/PostgreSQL

## Installation

$ git clone https://github.com/FeelsGoodDaySir/laravel-backpack-themer-boilerplate.git

$ npm install

$ composer install

$ cp .env.example .env

$ php artisan key:generate

Edit your .env

```
DB_CONNECTION={YOUR_DATABASE_CONNECTION}
DB_HOST={YOUR_DATABASE_HOST}
DB_PORT={YOUR_DATABASE_PORT}
DB_DATABASE={YOUR_DATABASE_NAME}
DB_USERNAME={DATABASE_USERNAME}
DB_PASSWORD={DATABASE_PASSWORD}
```

$ php artisan migrate

$ php artisan serve
