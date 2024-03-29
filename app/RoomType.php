<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = "room_types";

    public function room()
    {
        return $this->hasOne('App\Rooms', 'id_roomtype', 'id');
    }

    public $timestamps = false;
}
