php Conditional Statements
==========================

A quick guide to php Conditionals


#### Check if Varible Exsits (Long Version)
```php
<?php
    $var = test;
    if ($var){
    echo 'Varible has a value'; 
    } 
    else {
    echo 'Varible doesnt have a value';
    }
?>
```

#### Check if Varible Exsits (Shorthand Version)
```php
<?php
    $var = "test";
    echo isset($var) ? 'Var exists' : 'Not so much';
?>
```
