<?php

class BeerPrivate extends Beverage
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
        return "Alcohol percentage of beverage is {$this->alcoholPercentage}%";
    }

    private function beerInfo(): string
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage}% and I have a {$this->color} color.";
    }

    function getBeerInfo(): string
    {
        return $this->beerInfo();
    }
}