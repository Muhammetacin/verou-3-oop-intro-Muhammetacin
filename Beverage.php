<?php

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

    const BARNAME = 'Het Vervolg';

    private static string $address = 'Melkmarkt 9, 2000 Antwerpen';

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

    function printConstantPropertyFromBeverage(): string
    {
        return self::BARNAME . ' from Beverage class';
    }

    function printStaticAddress(): string
    {
        return 'Static address: ' . self::$address;
    }
}