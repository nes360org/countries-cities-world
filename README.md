# Countries-Cities-World

This package provides a fast and easy way to obtain a complete list of countries and cities in the world for use in your Laravel 9 application. It connects to an external API (RESTCountries) to gather the necessary information.

### Installation
You can install this package using Composer by running the following command:
```console
composer require root/countries-cities-world
```

### Configuration
After installing the package, you must publish its configuration file using the following command:
```console
php artisan vendor:publish --provider="Root\CountriesCitiesWorld\CountriesCitiesWorldServiceProvider"
```
### Usage
You can get a list of countries and cities at any time by calling the following functions:
```console
$countries = CountriesCitW::getCountries();

$cities = CountriesCitW::getCities($countryCode);
```

### Data
To understand the structure of the JSON returned, please consult the API documentation at https://restcountries.com/.

### Credits
This package uses the RESTCountries API (https://restcountries.com) to gather information about countries and cities around the world.