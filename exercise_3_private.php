<?php

declare(strict_types=1);

/* EXERCISE 3

Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

require './exercise_1_classes.php';

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature = 'cold') {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }

    function getAlcoholPercentage(): string
    {
        return "Alcohol percentage of beverage is {$this->alcoholPercentage}";
    }
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);

print_r($duvel->getAlcoholPercentage());
print_r('<br>Color of is ' . $duvel->color . '.<br>');
print_r($duvel->getInfo());

$duvel->color = 'light';
echo '<br>' . $duvel->getInfo() . '<br>';