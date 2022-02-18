## How to run

Configure a MySql instance on ```.env``` file, like the example below:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=exads
DB_USERNAME=exads
DB_PASSWORD=exads
```

Execute ```composer update``` for update composer dependencies;

Execute ```composer update``` for update composer dependencies;

Execute ```php artisan migrate --seed``` for create tables and seed data;

Use ```php artisan serve``` for execute the project in your computer;
