<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Exercise 1
/*
 * Create a class beverage.
 * Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
 * Have a default value "cold" in the construct for temperature.
 * Remember for now we will use properties and methods that can be accessed from everywhere.
 * Make a getInfo function which returns "This beverage is <temperature> and <color>."
 * Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically print the getInfo on the screen.
 * Print the temperature on the screen.
 *
 */
echo 'Exercise 1<br><br>';
require 'Beverage.php';

$exercise1Cola = new Beverage('black', 2);
echo nl2br($exercise1Cola->getInfo() . "\n");
echo 'Temperature of Cola: ' . $exercise1Cola->temperature;

// --------------------------------------------------------

// Exercise 2
/*
 * Make class beer that extends from Beverage.
 * Create the properties name (string) and alcoholpercentage (float).
 * Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
 * Remember for now we will use properties and methods that can be accessed from everywhere.
 * Make a getAlcoholpercentage function which returns the alocoholpercentage.
 * Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
 * Also the name equal to Duvel and the alcohol percentage to 8,5%
 * Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
 * Make sure that each print is on a different line.
 * Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
 *
 */
echo '<br><br>Exercise 2<br><br>';
require 'Beer.php';

$exercise2Duvel = new Beer('Duvel', 8.5, 'blond', 3.5);

echo $exercise2Duvel->getAlcoholPercentage() . '<br>';
print_r($exercise2Duvel->getAlcoholPercentage());
print_r('<br>Color of ' . $exercise2Duvel->name . ' is ' . $exercise2Duvel->color . '.<br>');
print_r($exercise2Duvel->getInfo());

// --------------------------------------------------------

// Exercise 3
/*
 * Copy the code of exercise 2 to here and delete everything related to cola.
 * Make all properties private.
 * Make all the other prints work without error.
 * After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
 * Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
 * Make sure that you use the variables and not just this text line.
 * Print this method on the screen on a new line.
 *
 */
echo '<br><br>Exercise 3<br><br>';
require 'BeerPrivate.php';

$exercise3Duvel = new BeerPrivate('Duvel', 8.5, 'blond', 3.5);

print_r($exercise3Duvel->getAlcoholPercentage());
print_r('<br>Color is ' . $exercise3Duvel->color . '.<br>');
print_r($exercise3Duvel->getInfo());

$exercise3Duvel->color = 'light';
echo '<br>' . $exercise3Duvel->getInfo() . '<br>';
echo $exercise3Duvel->getBeerInfo();

// --------------------------------------------------------

// Exercise 4
/*
 * Copy the code of exercise 2 to here and delete everything related to cola.
 * Make all properties protected.
 * Make all the other prints work without error without changing the beverage class.
 *
*/
echo '<br><br>Exercise 4<br><br>';
require 'BeerProtected.php';

$exercise4Duvel = new BeerProtected('Duvel', 8.5, 'blond', 3.5);

print_r($exercise4Duvel->getAlcoholPercentage());
print_r('<br>Color is ' . $exercise4Duvel->color . '.<br>');
print_r($exercise4Duvel->getInfo());

// --------------------------------------------------------

// Exercise 5
/*
 *
 * Copy the class of exercise 1.
 * Change the properties to private.
 * Fix the errors without using getter and setter functions.
 * Change the price to 3.5 euro and print it also on the screen on a new line.
 *
*/
echo '<br><br>Exercise 5<br><br>';
require 'BeveragePrivate.php';

$exercise5Cola = new BeveragePrivate('black', 2);
echo 'getInfo: ' . $exercise5Cola->getInfo() . '<br>';
echo 'getPrice: ' . $exercise5Cola->getPrice() . '<br>';

$reflectionClass = new ReflectionClass('BeveragePrivate');
$reflectionProperty = $reflectionClass->getProperty('price');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setValue($exercise5Cola, 3.5);
//var_dump($reflectionProperty->getValue($cola));

echo 'getPrice after modifying property: ' . $exercise5Cola->getPrice() . '<br>';

// --------------------------------------------------------

// Exercise 5
/*
 * Copy the classes of exercise 2.
 * Change the properties to private.
 * Make a const barname with the value 'Het Vervolg'.
 * Print the constant on the screen.
 * Create a function in beverage and use the constant.
 * Do the same in the beer class.
 * Print the output of these functions on the screen.
 * Make sure that every print is on a new line.
 *
 */
echo '<br><br>Exercise 6<br><br>';
//require 'BeerPrivate.php';

$exercise6Duvel = new BeerPrivate('Duvel', 8.5, 'blond', 3.5);
print_r($exercise6Duvel->printConstantPropertyFromBeverage() . '<br>');
print_r($exercise6Duvel->printConstantPropertyFromBeer() . '<br>');
