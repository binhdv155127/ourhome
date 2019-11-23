<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    protected $table = "provinces";

    public function district()
    {
        return $this->hasMany('App\Districts', 'id_province', 'id');
    }

    public function room()
    {
        return $this->hasMany('App\Rooms', 'id_province', 'id');
    }
}
