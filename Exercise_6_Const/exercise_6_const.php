<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

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