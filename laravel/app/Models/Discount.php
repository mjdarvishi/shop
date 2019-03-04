<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*
 * Class Product
 * @package App\Models
 * @property int id
 * @property int price

 *
 * */
class Discount extends Model
{
    public  function Product(){
        return $this->belongsToMany('App\Models\Product');
    }
}
