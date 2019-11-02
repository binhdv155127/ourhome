<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    protected $table = "districts";

    public function ward()
    {
        return $this->hasMany('App\Wards', 'id_district', 'id');
    }

    public function room()
    {
        return $this->hasMany('App\Rooms', 'id_district', 'id');
    }

    public function province()
    {
        return $this->belongsTo('App\Provinces', 'id_province', 'id');
    }
}
