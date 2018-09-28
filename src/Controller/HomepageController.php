<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Car;
use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $products = $this->getDoctrine()
            ->getRepository(Car::class)->findAll();

        $brands = $this->getDoctrine()
            ->getRepository(Brand::class)->findAllById();

        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomepageController',
            'products' => $products,
            'brands' => $brands
        ]);
    }
}
