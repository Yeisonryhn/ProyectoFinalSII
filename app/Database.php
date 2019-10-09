<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{

    protected $fillable = ['name','creation_date','d_b_engine_id','project_id','collation_id'];
    
    public function dBEngine(){
        return $this->belongsTo('App\DBEngine');
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function collation(){
        return $this->belongsTo('App\Collation');
    }

    public function tables(){
        return $this->hasMany('App\Tables');
    }
}
