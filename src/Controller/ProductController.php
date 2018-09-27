<?php

namespace App\Controller;

use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index($productId)
    {
        $carRepo = new CarRepository();
        $product = $carRepo->findById($productId);
        return $this->render('product/product.html.twig', [
            'controller_name' => 'ProductController',
            'product' => $product,
        ]);
    }
}
