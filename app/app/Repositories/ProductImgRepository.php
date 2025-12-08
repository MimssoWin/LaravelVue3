<?php

namespace App\Repositories;

use App\Models\ProductImg;
use Illuminate\Support\Collection;

class ProductImgRepository
{

    /**
     * @return ?Collection
     */
    public function getListProductImgFindByProductIDAndSaveStatusOrderByID() :?Collection
    {
        return ProductImg::where('product_id',$product_id)
            ->where('save_status','Y')->orderBy('id')->get();
    }
}
