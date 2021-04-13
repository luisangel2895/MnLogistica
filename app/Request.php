<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $guarded = [];

    public function equipments(){
        return $this->belongsToMany(Equipment::class);
    }

    public function materials(){
        return $this->belongsToMany(Material::class);
    }
}
