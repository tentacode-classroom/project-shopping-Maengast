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

        $cars[]=$car;

        $car = new Car();
        $car->setBrand("Aston Martin");
        $car->setId(12);

        $cars[]=$car;

        $car = new Car();
        $car->setBrand("Porsche");
        $car->setId(2);

        $cars[]=$car;
    }

    public function findAll():array {
        return $this->cars;
    }

    public function findById($_id): Car{

    }
}