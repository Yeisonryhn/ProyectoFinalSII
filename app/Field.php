<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{

    protected $fillable = ['name', 'length', 'default', 'null'];

    public function datatype(){
        return $this->belongsTo('App\Datatype');
    }

    public function table(){
        return $this->belongsTo('App\Table');
    }
}
