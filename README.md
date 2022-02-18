## How to run

This project use Laravel framework.

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
Execute ```php artisan migrate --seed``` for create tables and seed data;
Use ```php artisan serve``` for execute the project in your computer;

Prime Number codes are [here](https://github.com/DiovaneGabriel/exads/blob/main/app/Http/Controllers/PrimeNumbersController.php) and [here](https://github.com/DiovaneGabriel/exads/blob/main/resources/views/prime-numbers.blade.php)
ASCII Array codes are [here](https://github.com/DiovaneGabriel/exads/blob/main/app/Http/Controllers/ASCIIArrayController.php) and [here](https://github.com/DiovaneGabriel/exads/blob/main/resources/views/ascii-array.blade.php)
TV Series codes are [here](https://github.com/DiovaneGabriel/exads/blob/main/app/Http/Controllers/TVSeriesController.php) and [here](https://github.com/DiovaneGabriel/exads/blob/main/resources/views/tv-series.blade.php)
A/B Testing codes are [here](https://github.com/DiovaneGabriel/exads/blob/main/app/Http/Controllers/ABTestingController.php) and [here](https://github.com/DiovaneGabriel/exads/blob/main/resources/views/ab-testing.blade.php)

TV Series classes are [here](https://github.com/DiovaneGabriel/exads/blob/main/app/Models/TvSerie.php) and [here](https://github.com/DiovaneGabriel/exads/blob/main/app/Models/TvSerieInterval.php)

SQL code is [here](https://github.com/DiovaneGabriel/exads/blob/main/others/sql_scipts.sql)

Others codes are [here](https://github.com/DiovaneGabriel/exads/blob/main/app/Components/helpers.php)

You can view the project on [AWS EC2 Server]()