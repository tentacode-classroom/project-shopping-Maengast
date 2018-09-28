<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Car;
use \App\Entity\Gearbox;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index($productId)
    {
        $product = $this->getDoctrine()
            ->getRepository(Car::class)->find($productId);

        $brand = $this->getDoctrine()
            ->getRepository(Brand::class)->find($product->getBrand());

        $gearbox = $this->getDoctrine()
            ->getRepository(Gearbox::class)->find($product->getGearbox());

        $product->setViewCounter(+1);

        $entityManager=$this->getDoctrine()->getManager();
        $entityManager->persist($product);
        $entityManager->flush();


        return $this->render('product/product.html.twig', [
            'controller_name' => 'ProductController',
            'product' => $product,
            'brand' => $brand,
            'gearbox' => $gearbox
        ]);
    }
}
