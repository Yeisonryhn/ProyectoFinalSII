<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{

    protected $fillable = ['name','creation_date','database_id'];

    public function fields(){
        return $this->hasMany('App\Field');
    }

    public function database(){
        return $this->belongsTo('App\Database');
    }

    public function modifications(){
        return $this->hasMany('App\Modification');
    }

    //OJO CON ESTE MÉTODO, ES MANY TO MANY
    /*public function tables(){
        return $this->hasMany('App\Table');
    }
    public function table(){
        return $this->belongsTo('App\Table');
    }*/

    
}
