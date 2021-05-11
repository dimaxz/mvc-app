<?php


namespace Local\Controllers;


use Local\Interfaces\ProductRepositoryInterface;
use Local\Models\Basket;
use Local\Repositories\ProductCriteria;
use Local\Repositories\ProductRepository;
use Local\Services\BasketService;

class BasketController
{

    private $basketService;


    protected function view(string $name, array $data): string
    {

        ob_start();
        $tpl = sprintf('%s/%s.php', __DIR__.'/../Views', $name);

        if (!file_exists($tpl)) {
            throw new \RuntimeException(sprintf('template %s.php not found', $name));
        }

        extract($data);

        include $tpl;

        return ob_get_clean();
    }


    public function __construct(BasketService $basketService)
    {
        $this->basketService = $basketService;
    }

    /**
     * @param array $productRequest
     */
    public function addProduct(array $productRequest): void
    {

        $id = $productRequest['id'] ?? null;

        $this->basketService->addProduct($id);
    }


    public function getProducts(): string
    {

        $basket = $this->basketService->getCurrentBasket();

        $basketItems = $basket->getProducts()->toArray();

        //$viewModel = new ProductsViewModel($basketItems);

        $str =  $this->view('basket', [
            'items' => $basketItems
        ]);

       return $str;
    }

}