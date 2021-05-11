<?php


namespace Local\Repositories;


use Local\Models\Product;

class ProductCollection extends AbsctractCollection
{
    protected function getEntityClass(): string
    {
        return Product::class;
    }

    public function toArray(): array
    {
        return array_map(function ($k) {
            return $k->toArray();
        }, $this->_entities);
    }
}