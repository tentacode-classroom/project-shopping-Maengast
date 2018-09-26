<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CarRepository;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index($productId)
    {
        $product = $carRepo->findById($productId);
        return $this->render('product/product.html.twig', [
            'controller_name' => 'ProductController',
            'product' => $product,
        ]);
    }
}
