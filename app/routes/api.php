<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/hello', function () {
    return ['message' => '안녕하세요! Laravel API 응답입니다.'];
});

Route::get('/v1/menus', [MenuController::class, 'getMenuList']);
Route::get('/v1/home/products', [ProductController::class, 'getProductList']);
