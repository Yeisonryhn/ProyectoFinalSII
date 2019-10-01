<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportRequest extends Model
{

    protected $fillable = ['creation_date', 'requested_date'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
