<?php

namespace App\Services\MainEntryDomain;

use Illuminate\Support\Collection;
use App\Repositories\MenuRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MenuService
{
    public function __construct(
        protected MenuRepository $menuRepository
    ) {}

    /**
     * 메뉴 목록 가져오기
     * @return Collection
     * @throws ModelNotFoundException
     */
    public function getMenuList(): Collection
    {
        $menuList = $this->menuRepository->getMenuListFindByIsActive();

        if ($menuList->isEmpty()) {
            throw new ModelNotFoundException("활성화된 메뉴가 없습니다.");
        }

        return $menuList;

    }

}
