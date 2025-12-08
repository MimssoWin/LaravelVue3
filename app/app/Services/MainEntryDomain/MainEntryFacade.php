<?php

namespace App\Services\MainEntryDomain;

use Illuminate\Support\Collection;

class MainEntryFacade
{
    public function __construct(
        protected MenuService $menuService,
        protected ProductService $productService,
    ) {}


    public function getMenuList() : Collection {
        return $this -> menuService -> getMenuList();
    }

    public function getProductList() : Collection {
        return $this -> productService -> getProductList();
    }

}

?>
