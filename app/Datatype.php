<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datatype extends Model
{

    protected $fillable = ['name', 'weight', 'example'];

    public function fields(){
        return $this->belongsToMany('App\Field');
    }
}
