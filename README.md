# ibgecode-php<br>
[![PHP Lint](https://img.shields.io/badge/PHP%20Lint-passed-green)](https://github.com/carloswph/ibgecode-php/)<br>
Simple library to retrieve Brazilian city and respective state from the IBGE code.<br>

# Installation
Just require the library using Composer `composer require carloswph/ibgecode-php`.

# Usage
Simple autoload and instantiate the IBGE classe - including an array of the searched codes as parameter. From the initial instance, the class admits methods to get the respective city, the state or both. All methods return and array of results. 

```php
use WPH\IBGE\IBGE;

require __DIR__ . '/vendor/autoload.php';

$try = new IBGE(['5200050', '2300101', '99999999999']);
$try->getCity(); // return an array of city names for each code
$try->getState(); // return an array of state codes for those
$try->getBoth(); // return an array of arrays, each with key-value pairs for cities and state codes
```

An additional chained method is available to return JSON, as follows.

```php
$try = new IBGE(['5200050', '2300101', '99999999999']);
$try->getCity(); // return an array of city names for each code
$json = $try->toJson();

echo $json;

// Results in:
// [{"cidade":"Abadia de Goi\u00e1s","estado":"GO"},{"cidade":"Abaiara","estado":"CE"},["C\u00f3digo Inexistente."]]
// The toJson() method admits the parameter true, which returns the JSON response in pretty print format.
