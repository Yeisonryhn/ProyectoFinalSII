<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBEngine extends Model
{

    protected $fillable = ['name'];

    public function databases(){
        return $this->hasMany('App\Database');
    }
}
