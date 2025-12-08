<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\MainEntryDomain\MainEntryFacade;

class ProductController extends Controller
{
    protected MainEntryFacade $mainEntryFacade;

    public function __construct(MainEntryFacade $mainEntryFacade)
    {
        $this->mainEntryFacade = $mainEntryFacade;
    }

    /**
     *
     */
    public function getProductList()
    {
        try {
            $productGet = $this->mainEntryFacade -> getProductList();
            $productList = $productGet->toArray();
            return response()->json([
                "status" => "success",
                "data" => $productList
            ],200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "status" => "error",
                "message" => $e->getMessage()
            ], 404);
        }
    }
}
