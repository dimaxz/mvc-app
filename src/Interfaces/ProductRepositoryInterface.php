<?php

namespace Local\Interfaces;

use Local\Models\Product;
use Local\Repositories\ProductCollection;
use Local\Repositories\ProductCriteria;

interface ProductRepositoryInterface
{
    public function findById(int $id): ?Product;

    public function findByCriteria(ProductCriteria $criteria): ProductCollection;
//
//
//    public function findByPrice(): ProductCollection;
//
//    public function findByPriceAndName(): ProductCollection;

}