# bugrov-date

# Install

```php
    composer require bugrov/date
```
This will add the class Time.php and trait TimeTrait.php to the src/ folder

# Usage

- add generated autoload.php in your current file
- create class instanse:
```php
    $date = new Bugrov\Web\Time();
```
- get current day:
```php
    echo $date->getCurrentDay();
```
- get current month in russian interpretation:
```php
    echo $date->getCurrentMonth();
```
- get current year:
```php
    echo $date->getCurrentYear();
```
- get full date (day, month, year) in russian interpretation:
```php
    echo $date->getCurrentDateRussian();
```
