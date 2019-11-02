<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RateRoom extends Model
{

    protected $table = "rate_rooms";

    public function roomUsed()
    {
        return $this->belongsTo('App\RoomUsed', 'id_roomused', 'id');
    }

}
