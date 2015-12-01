<?php
namespace App\facades;
use Illuminate\Support\Facades\Facade;

class Testfacade extends Facade{
    protected static function getFacadeAccessor() {
        return "test";
    }
}
