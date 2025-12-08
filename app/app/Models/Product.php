<?php

namespace App\Models;

use App\Models\ProductImg;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_price',
        'save_status',
    ];

    public function images()
    {
        return $this->hasMany(ProductImg::class);
    }
}
