<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRepository
{

    public function getProductListWithImageFindBySaveStatusOrderById() :? Collection
    {
        return Product::with('images')->where('save_status','Y')->orderBy('id')->get();
    }
}
