<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * Class Cat
 * @package App\Models
 * @property int id
 * @property string name
 *
 * */
class Cat extends Model
{
    public function Subcat(){
        return $this->hasMany('App\Models\Subcat');
    }
}
