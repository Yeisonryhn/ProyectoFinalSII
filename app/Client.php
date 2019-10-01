<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'name', 'last_name', 'identity_card_number'
    ];
    /**
    * Este método se usa para poder acceder a las relaciones del la tabla cliente. 
    */
    public function projects(){
        return $this->hasMany('App\Project');
    }
}
