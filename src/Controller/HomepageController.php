<?php

namespace App\Controller;

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
        $carRepo = new CarRepository();
        $products = $carRepo->findAll();
        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomepageController',
            'products' => $products
        ]);
    }
}
