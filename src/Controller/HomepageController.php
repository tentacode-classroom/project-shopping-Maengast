<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CarRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $carRepo = new CarRepository();
        $products = $carRepo->findAll();
        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomepageController',
            'products' => $products
        ]);
    }
}
