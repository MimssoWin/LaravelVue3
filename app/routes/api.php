<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MenuController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/hello', function () {
    return ['message' => '안녕하세요! Laravel API 응답입니다.'];
});

Route::get('/menus', [MenuController::class, 'getMenuList']);

