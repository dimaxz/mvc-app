<?php


namespace Local\Repositories;


use Local\Models\Basket;

class BasketCollection extends AbsctractCollection
{
    protected function getEntityClass(): string
    {
        return Basket::class;
    }

}