<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            ['label' => 'Home', 'url' => '/', 'is_active' => 'Y'],
            ['label' => 'About', 'url' => '/about', 'is_active' => 'Y'],
            ['label' => 'Contact', 'url' => '/contact', 'is_active' => 'Y'],
        ]);
    }
}
