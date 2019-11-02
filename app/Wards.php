<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    protected $table = "wards";

    public function room()
    {
        return $this->hasMany('App\Rooms', 'id_ward', 'id');
    }

    public function province()
    {
        return $this->belongsTo('App\Districts', 'id_district', 'id');
    }
}
