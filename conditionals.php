
<php // Default ?>

<?php
    $var = test;
    if ($var){
    echo 'Varible has a value'; 
    } 
    else {
    echo 'Varible doesnt have a value';
    }
?>

<php // Shorthand Version ?>

<?php
    $var = "test";
    echo isset($var) ? 'Var exists' : 'Not so much';
?>
