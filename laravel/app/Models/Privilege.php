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
class Privilege extends Model
{
    protected $table='privileges';
    public function User (){
        return $this->hasMany('App\User');
    }
}
