<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modification extends Model
{

    protected $fillable = ['modification_date', 'reason'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function table(){
        return $this->belongsTo('App\Table');
    }
}
