<?php

namespace Local\Repositories;

use Local\Interfaces\ProductRepositoryInterface;
use Local\Models\Product;

class ArrayProductRepository implements ProductRepositoryInterface
{

    private $products = [
        [
            'id' => 1,
            'name' => 'Молоко',
            'price' => 56,
            'amount' => 2,
        ],
        [
            'id' => 2,
            'name' => 'Хлеб',
            'price' => 25,
            'amount' => 1,
        ]
    ];



    public function findById(int $id): ?Product
    {
        $products = $this->findByCriteria(
            (new ProductCriteria())->setFilterById($id)
        );

        if(count($products)){
            return $products->current();
        }

        return null;
    }


    public function findByCriteria(ProductCriteria $criteria): ProductCollection
    {
        $collection = new ProductCollection();

        foreach ($this->products as $product){
            
            if($criteria->getFilterById()!==null && $product['id'] !== $criteria->getFilterById()){
                continue;
            }

            if($criteria->getFilterByName()!==null && $product['name'] !== $criteria->getFilterByName()){
                continue;
            }

            $collection->push((new Product())
                ->setName($product['name'])
                ->setId($product['id'])
                ->setPrice($product['price'])
                ->setAmount($product['amount'])
            )
            ;
        }


        return $collection;
    }
}