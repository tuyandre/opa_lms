<?php

namespace App\Models;

use Harimayco\Menu\Models\Menus;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected  $guarded = [];

    public static function getMenuName($type){
        $menus = json_decode(config('menu_list'));
        foreach ($menus as $item){
            if($item->location == $type && $item->id != 0){
                $menu =  Menus::find($item->id);
                return $menu;
            }
        }
    }
}
