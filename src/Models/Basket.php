<?php


namespace Local\Models;


use Local\Repositories\ProductCollection;

class Basket
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var ProductCollection
     */
    private $products;

    /**
     * @var Customer
     */
    private $customer;

    private $name;

    /**
     * @return ProductCollection
     */
    public function getProducts(): ProductCollection
    {
        return $this->products;
    }

    /**
     * @param ProductCollection $products
     * @return Basket
     */
    public function setProducts(ProductCollection $products): Basket
    {
        $this->products = $products;
        return $this;
    }


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Basket
     */
    public function setId(?int $id): Basket
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return Basket
     */
    public function setCustomer(Customer $customer): Basket
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Basket
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    /**
     * @param Product $product
     */
    public function addProduct(Product $product): void
    {
        $this->products []= $product;
    }

}