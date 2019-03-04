<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/*
 * Class Subcat
 * @package App\Models
 * @property int id
 * @property string name
 * @property int cat_id
 *
 * */

class Subcat extends Model
{
    public function Cat()
    {
        return $this->belongsTo('App\Models\Cat');
    }
    public function Product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
