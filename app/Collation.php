<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collation extends Model
{
    
    protected $fillable = ['description'];

    public function databases(){
        return $this->hasMany('App\Database');
    }
}
