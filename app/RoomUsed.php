<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomUsed extends Model
{
    protected $table = "room_useds";

    public function roomRate()
    {
        return $this->hasmany('App\RateRoom', 'id_roomused', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
