<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    //Relaciòn One To Many
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

    //Relacion Muchas a uno
    public function user(){
        return $this->belongsTo('App\user', 'user_id');
    }

}
