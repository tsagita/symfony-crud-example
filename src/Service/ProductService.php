<?php

namespace App\Service;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

class ProductService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAllProducts()
    {
        return $this->entityManager->getRepository(Product::class)->findAll();
    }

    public function createProduct(Product $product)
    {
        $product->setCreatedAt(new \DateTime());
        $product->setUpdatedAt(new \DateTime());
        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }

    public function updateProduct(Product $product)
    {
        $product->setUpdatedAt(new \DateTime());
        $this->entityManager->flush();
    }

    public function deleteProduct(Product $product)
    {
        $this->entityManager->remove($product);
        $this->entityManager->flush();
    }
}
