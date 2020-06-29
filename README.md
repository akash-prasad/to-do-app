#To Do List Application

## Local Development Setup

### Prerequisite
1. PHP 7.4+
2. Composer
2. Make sure you have Docker installed

### Setup
Following instructions assumes you don't have softwares (e.g. PHP, composer, etc) installed on the host machine. If you do have those tools installed, feel free to run `artisan` command from host machine.

1. From the project root directory run the `composer install`
2. Laravel requires you to setup an application key so please run this command `php artisan key:generate`
3. Use `docker-compose up -d` to run the containerised application locally

Now go to https://localhost/ to access the application.