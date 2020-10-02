<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_model extends Model
{
    protected $guarded=[];

    public function carBrand(){
        return $this->belongsTo(CarBrand::class);
    }
    public function carSingle(){
        return $this->hasMany(Car_specification::class);
    }
    public function carGallery(){
        return $this->hasMany(Car_gallery::class);
    }
}
