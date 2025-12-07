<?php

namespace App\Services\MainEntryDomain;

use Illuminate\Support\Collection;

class MainEntryFacade
{
    public function __construct(
        protected MenuService $menuService,
    ) {}


    public function getMenuList() : Collection {
        return $this -> menuService -> getMenuList();
    }

}

?>
