<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function getRouteKeyName(){
        return "slug";
    }

    public function price(){
       return money_format('%i',$this->price);
    }
}
