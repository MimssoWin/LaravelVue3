<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'product_name'  => '역삼동원룸',
            'product_price' => 500000,   // 50만원
            'save_status'   => 'Y',
        ]);

        Product::create([
            'product_name'  => '천호동원룸',
            'product_price' => 600000,   // 60만원
            'save_status'   => 'Y',
        ]);

        Product::create([
            'product_name'  => '마포구원룸',
            'product_price' => 700000,   // 70만원
            'save_status'   => 'Y',
        ]);
    }
}
