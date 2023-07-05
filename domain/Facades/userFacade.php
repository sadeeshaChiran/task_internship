<?php

namespace domain\Facades;



use domain\Services\catagoryItemBrandService;
use domain\Services\catagoryItemNameService;
use domain\Services\userService;
use Illuminate\Support\Facades\Facade;

class userFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return userService::class;
    }
}
