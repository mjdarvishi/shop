<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/*
 * Class Comment
 * @package App\Models
 * @property int id
 * @property int id
 * @property int user_id
 * @property int product_id
 * @property string  content

 *
 * */
class Comment extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }
    public function Product(){
        return $this->belongsTo('App\Models\Product');
    }
}
