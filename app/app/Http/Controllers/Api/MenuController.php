<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\MainEntryDomain\MainEntryFacade;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MenuController extends Controller
{

    protected MainEntryFacade $mainEntryFacade;

    public function __construct(MainEntryFacade $mainEntryFacade)
    {
        $this->mainEntryFacade = $mainEntryFacade;
    }


    public function getMenuList()
    {
        try {
            $menuGet = $this->mainEntryFacade -> getMenuList();
            $menuList = $menuGet->toArray();
            return response()->json([
                "status" => "success",
                "data" => $menuList
            ],200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "status" => "error",
                "message" => $e->getMessage()
            ], 404);
        }

    }
}
