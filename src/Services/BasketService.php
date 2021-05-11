<?php

namespace Local\Services;

use Local\Interfaces\BasketRepositoryInterface;
use Local\Interfaces\ProductRepositoryInterface;
use Local\Models\Basket;
use Local\Repositories\BasketCriteria;

class BasketService
{
    private $basketRepository;
    private $productRepository;

    public function __construct(BasketRepositoryInterface $basketRepository,
                                ProductRepositoryInterface $productRepository )
    {
        $this->basketRepository = $basketRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Получить тек корзину
     * @return Basket
     */
    public function getCurrentBasket(): \Local\Models\Basket
    {
        $baskets = $this->basketRepository->findByCriteria(
            (new BasketCriteria())->setFilterByName('default')
        );

        return $baskets->current();
    }

    /**
     * Добавить товар в корзину
     * @param int $productId
     */
    public function addProduct(int $productId): void
    {

        $basket = $this->getCurrentBasket();

        if(!isset($productId)){
            throw new \RuntimeException('id not correct');
        }

        if(!$product = $this->productRepository->findById($productId) ){
            throw new \RuntimeException(sprintf(
                'product by id $id not found',
                $productId
            ));
        }

        $basket->addProduct($product);
    }

}