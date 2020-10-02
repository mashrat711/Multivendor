<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_specification extends Model
{
    protected $guarded=[];
    
    public function carModel(){
        return $this->belongsTo(Car_model::class);
    }
}
