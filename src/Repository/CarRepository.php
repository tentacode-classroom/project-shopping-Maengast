<?php

namespace App\Repository;


use App\Entity\Car;

class CarRepository
{
    private $cars;

    public function __construct()
    {
        $car = new Car();
        $car->setBrand("Chrysler");
        $car->setId(1);

        $this->cars[]=$car;

        $car = new Car();
        $car->setBrand("Aston Martin");
        $car->setId(12);

        $this->cars[]=$car;

        $car = new Car();
        $car->setBrand("Porsche");
        $car->setId(2);

        $this->cars[]=$car;
    }

    public function findAll():array {
        return $this->cars;
    }

    public function findById($_id): Car{
        foreach ($this->cars as $car){
            if ($car->getId() == $_id) return $car;
        }
    }
}