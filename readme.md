## Regular Installation
1. `git clone git@github.com:KenoKokoro/laravel-multilayers.git`
2. `cp .env.example .env`
3. `composer install`
4. `php artisan key:generate`
5. Setup your database and run the migrations using: `php artisan migrate`
6. To run the unit tests: `vendor/bin/phpunit`

## Docker Installation
1. `git clone git@github.com:KenoKokoro/laravel-multilayers.git`
2. Install `docker` and `docker-compose`
    
    https://docs.docker.com/install/linux/docker-ce/ubuntu/#os-requirements
    
    https://docs.docker.com/compose/install/#install-compose
3. `cp .env.example .env` And setup your environment variables under the `#Docker variables` section
4. `docker-compose up -d --build` To build and start the containers
5. `docker-compose exec --user=nginx app composer install`
6. `docker-compose exec --user=nginx app php artisan key:generate`
7. Set the `DB_HOST` variable in your `.env` file to: `mariadb`
8. `docker-compose exec --user=nginx app php artisan migrate`
9. To run the unit tests: `docker-compose exec --user=nginx app vendor/bin/phpunit`
