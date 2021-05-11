<?php

namespace Local\Interfaces;


use Local\Models\Basket;
use Local\Repositories\BasketCollection;
use Local\Repositories\BasketCriteria;

interface BasketRepositoryInterface
{
    public function findById(int $id): ?Basket;

    public function findByCriteria(BasketCriteria $criteria): BasketCollection;

}