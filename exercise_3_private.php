<?php

declare(strict_types=1);

/* EXERCISE 3

Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

//require './exercise_1_classes.php';
//
//class Beer extends Beverage
//{
//    private string $name;
//    private float $alcoholPercentage;
//
//    function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature = 'cold') {
//        $this->name = $name;
//        $this->alcoholPercentage = $alcoholPercentage;
//        parent::__construct($color, $price, $temperature);
//    }
//
//    function getAlcoholPercentage(): string
//    {
//        return "Alcohol percentage of beverage is {$this->alcoholPercentage}";
//    }
//
//    private function beerInfo(): string
//    {
//        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.";
//    }
//
//    function getBeerInfo(): string
//    {
//        return $this->beerInfo();
//    }
//}