# Laravel Quickstart - Basic

php verison 7.3.12

## Quick Installation

    git clone https://github.com/cattallin/laravel-automtion-test.git laravel-automation-test

    cd laravel-automation-test

    composer install

    cp .env.example .env
    -> set database in .env file and in .env.testing

    php artisan migrate


    Run tests command:
    php vendor/bin/codecept run

    File with test:
    tests/functinal/TaskCest.php
