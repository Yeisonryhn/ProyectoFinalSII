<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['name', 'url'];

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function database(){
        return $this->hasOne('App\Database');
    }

    
}
