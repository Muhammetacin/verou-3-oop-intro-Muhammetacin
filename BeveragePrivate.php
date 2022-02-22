<?php

class BeveragePrivate
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