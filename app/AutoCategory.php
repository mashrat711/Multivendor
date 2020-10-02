<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoCategory extends Model
{
    protected $guarded=[];
    public function autoCat(){
        return $this->hasMany(Autos::class,'autoCategory_id');
    }
}
