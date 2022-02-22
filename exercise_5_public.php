<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

Change the properties to private.
Fix the errors without using getter and setter functions.
Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    function getPrice() :string
    {
        return "This beverage costs €{$this->price}.";
    }
}

$cola = new Beverage('black', 2);
echo $cola->getInfo() . '<br>';
echo $cola->getPrice() . '<br>';

$reflectionClass = new ReflectionClass('Beverage');
$reflectionProperty = $reflectionClass->getProperty('price');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setValue($cola, 3.5);
//var_dump($reflectionProperty->getValue($cola));

echo $cola->getPrice() . '<br>';
