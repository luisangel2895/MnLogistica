<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Material extends Model
{
    protected $guarded = [];

    public function requests(){
        return $this->belongsToMany(Request::class);
    }
}
