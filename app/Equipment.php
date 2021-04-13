<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Equipment extends Model
{
    protected $guarded = [];

    public function requests(){
        return $this->belongsToMany(Request::class);
    }
}
