It's a CRUD app on Laravel and AdminLTE.
Enter with login and password.
Two tables:clients and cars.Their relationship is: "Many to many".
All data is validated.
After migrations and seeds, there will be 100 records in each table.
"php": "^7.3|^8.0", "jeroennoten/laravel-adminlte": "^3.7", "laravel/framework": "^8.65"

How to install the project:

Make Project.
Clone from gitHub: git@github.com:AnKrash/-terraforcesoftware_test.git
composer install
Configure the settings corresponding to your database.
Make migration: php artisan migrate
Make seeds: php artisan db:seed
php artisan key:generate
Make serve: php artisan serve
