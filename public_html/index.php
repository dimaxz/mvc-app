<?php

use Local\Repositories\ProductRepository;
use Local\Services\BasketService;
use Models\Customer;

include_once '../vendor/autoload.php';


$controller = new \Local\Controllers\BasketController(
    new BasketService(
        new \Local\Repositories\ArrayBasketRepository(),
        new \Local\Repositories\ArrayProductRepository()
    )
);

try{
//    $controller->addProduct([
//        'id' => 1
//    ]);
//
//    echo 'товар добавлен';

    echo $controller->getProducts();

}
catch (\Exception $ex){
    echo 'что то пошло не так';
}
