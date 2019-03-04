<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * Class Product
 * @package App\Models
 * @property int id
 * @property string title
 * @property string description
 * @property string description
 * @property int price
 * @property int subcat_id
 *
 * */
class Product extends Model
{
    public function Subcat(){
        return $this->belongsTo('App\Models\Subcat');
    }
    public  function Comment(){
        return $this->hasMany('App\Models\Comment');
    }
    public function Discount(){
        return $this->belongsToMany('App\Models\Discount');
    }
}
