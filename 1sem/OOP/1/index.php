<?php

class Cat
{
    public string $name;
    public string $color;
    public float $weight;

    public function __construct(string $name, string $color, float $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function sayHi()
    {
        echo ("Привет, меня зовут " . $this->name . "\n");
    }
}

$cat1 = new Cat("Рыжик", "Рыжий", 8.5);
$cat2 = new Cat("Барсик", "Серый", 12);

$cat1->sayHi();
$cat2->sayHi();
