<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImg;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::whereIn('product_name', [
            '역삼동원룸',
            '천호동원룸',
            '마포구원룸',
        ])->get()->keyBy('product_name');

        // 역삼동원룸 자식 이미지
        ProductImg::create([
            'product_id'   => $products['역삼동원룸']->id,
            'img_fullname' => 'room01.jpg',
            'img_path'     => '/app/public/productImgs/',
            'save_status'  => 'Y',
        ]);

        // 천호동원룸 자식 이미지
        ProductImg::create([
            'product_id'   => $products['천호동원룸']->id,
            'img_fullname' => 'room02.jpg',
            'img_path'     => '/app/public/productImgs/',
            'save_status'  => 'Y',
        ]);

        // 마포구원룸 자식 이미지
        ProductImg::create([
            'product_id'   => $products['마포구원룸']->id,
            'img_fullname' => 'room03.jpg',
            'img_path'     => '/app/public/productImgs/',
            'save_status'  => 'Y',
        ]);
    }
}
