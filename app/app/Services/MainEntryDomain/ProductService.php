<?php

namespace App\Services\MainEntryDomain;

use Illuminate\Support\Collection;
use App\Repositories\ProductRepository;
use App\Repositories\ProductImgRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ProductService
{

    public function __construct(
        protected ProductRepository $productRepository,
        protected ProductImgRepository $productImgRepository,
    ){}

    public function getProductList()
    {
        $productList = $this -> productRepository -> getProductListWithImageFindBySaveStatusOrderById();

        if ($productList->isEmpty()) {
            throw new ModelNotFoundException("등록된 제품이 없습니다.");
        }
        return $productList;
    }
}

?>
