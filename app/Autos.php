<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    protected $guarded=[];
    public function autos(){
        return $this->belongsTo(AutoCategory::class);
    }
}
