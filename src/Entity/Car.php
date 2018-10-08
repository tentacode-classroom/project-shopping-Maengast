<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarRepository")
 */
class Car
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $gearbox;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $viewCounter;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Brand", inversedBy="cars")
     * @ORM\JoinColumn(nullable=false)
     */
    private $brand;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getGearbox(): ?int
    {
        return $this->gearbox;
    }

    public function setGearbox(?int $gearbox): self
    {
        $this->gearbox = $gearbox;

        return $this;
    }

    public function getViewCounter(): ?int
    {
        return $this->viewCounter;
    }

    public function setViewCounter(?int $viewCounter): self
    {
        $this->viewCounter += $viewCounter;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function setBrand(?Brand $brand): self
    {
        $this->brand = $brand;

        return $this;
    }
}
