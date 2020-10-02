<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    protected $guarded=[];
    
    public function carModel(){
        return $this->hasMany(Car_model::class);
    }
}
