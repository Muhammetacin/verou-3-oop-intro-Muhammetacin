<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

Change the properties to private.
Fix the errors without using getter and setter functions.
Change the price to 3.5 euro and print it also on the screen on a new line.
*/

require '../BeveragePrivate.php';

$cola = new BeveragePrivate('black', 2);
echo $cola->getInfo() . '<br>';
echo $cola->getPrice() . '<br>';

$reflectionClass = new ReflectionClass('BeveragePrivate');
$reflectionProperty = $reflectionClass->getProperty('price');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setValue($cola, 3.5);
//var_dump($reflectionProperty->getValue($cola));

echo $cola->getPrice() . '<br>';