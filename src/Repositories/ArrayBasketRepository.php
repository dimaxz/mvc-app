<?php

namespace Local\Repositories;

use Local\Interfaces\BasketRepositoryInterface;
use Local\Interfaces\ProductRepositoryInterface;
use Local\Models\Basket;
use Local\Models\Customer;
use Local\Models\Product;

class ArrayBasketRepository implements BasketRepositoryInterface
{

    private $baskets = [
        [
            'id'    =>  1,
            'name' => 'default',
            'products' => [
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
            ],
        ]
    ];



    public function findById(int $id): ?Basket
    {

//
//        if(count($products)){
//            return $products->current();
//        }

        return null;
    }


    public function findByCriteria(BasketCriteria $criteria): BasketCollection
    {
        $collection = new BasketCollection();

        foreach ($this->baskets as $basket){

            $basketModel = (new Basket())->setName($basket['name'])->setId($basket['id']);

            $basketModel->setCustomer((new Customer())->setName('Дмитрий'));

          

            $productsCollection = new ProductCollection();

            foreach ($basket['products'] as $product){
                $productsCollection->push((new Product())
                    ->setName($product['name'])
                    ->setId($product['id'])
                    ->setPrice($product['price'])
                    ->setAmount($product['amount'])
                )
                ;
            }

            $basketModel->setProducts($productsCollection);

            $collection->push(
                $basketModel
            )
            ;

        }


        return $collection;
    }
}