<?php

namespace App\Entity;


class Car
{
    private $id;
    private $name;
    private $brand;
    private $type;

    public function setBrand(string $_brand){
        $this->brand = $_brand;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function getId()
    {
        return $this->id;
    }



}