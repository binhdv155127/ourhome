<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = "room_types";

    public function room()
    {
        return $this->belongsTo('App\Rooms', 'id_roomtype', 'id');
    }
}
