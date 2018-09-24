# IsTrue [![Build Status](https://travis-ci.org/LoickVirot/IsTrue.svg?branch=master)](https://travis-ci.org/LoickVirot/IsTrue)
PHP function to be sure a boolean is really true.

## How to use it
```php
<?php

require __DIR__ . './vendor/autoload.php';

use LoickVirot\Classes\IsTrue;

$variable = true;

if (IsTrue::test($variable)) {
    echo "OK";
} else {
    echo "NOK";
}
```