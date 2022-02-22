<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

Change the properties to private.
Make a const barname with the value 'Het Vervolg'.
Print the constant on the screen.
Create a function in beverage and use the constant.
Do the same in the beer class.
Print the output of these functions on the screen.
Make sure that every print is on a new line.

Use typehinting everywhere!
*/

require '../BeerPrivate.php';

//class Beer extends Beverage
//{
//    private string $name;
//    private float $alcoholPercentage;
//    private const BARNAME = 'Het Vervolg';
//
//    function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature = 'cold') {
//        $this->name = $name;
//        $this->alcoholPercentage = $alcoholPercentage;
//        parent::__construct($color, $price, $temperature);
//    }
//
//    function getAlcoholPercentage(): string
//    {
//        return "Alcohol percentage of beverage is $this->alcoholPercentage";
//    }
//}

//$exercise6Duvel = new BeerPrivate('Duvel', 8.5, 'blond', 3.5);
//print_r($exercise6Duvel->printConstantPropertyFromBeverage() . '<br>');
//print_r($exercise6Duvel->printConstantPropertyFromBeer() . '<br>');
