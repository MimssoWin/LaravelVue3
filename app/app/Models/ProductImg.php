<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImg extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'product_id',
        'img_fullname',
        'img_path',
        'save_status',
    ];

    protected $appends = ['full_url'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getFullUrlAttribute()
    {
        return "/{$this->img_path}/{$this->img_fullname}";
    }

}
