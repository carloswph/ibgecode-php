# ibgecode-php
Simple library to retrieve Brazilian city and respective state from the IBGE code.

# Usage
Simple autoload and instantiate the IBGE classe - including an array of the searched codes as parameter. From the initial instance, the class admits methods to get the respective city, the state or both. All methods return and array of results. 

```php
use WPH\IBGE\IBGE;

require __DIR__ . '/vendor/autoload.php';

$try = new IBGE(['5200050', '2300101', '99999999999']);
$try->getBoth();
```
