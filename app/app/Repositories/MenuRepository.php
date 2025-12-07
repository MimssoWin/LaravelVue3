<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Models\Menu;

class MenuRepository
{

    /**
     * @return ?Collection
     */
    public function getMenuListFindByIsActive() :?Collection
    {
        return Menu::where('is_active','Y')->get();
    }
}
