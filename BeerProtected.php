<?php

class BeerProtected extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature = 'cold')
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }

    function getAlcoholPercentage(): string
    {
        return "Alcohol percentage of beverage is {$this->alcoholPercentage}%";
    }
}