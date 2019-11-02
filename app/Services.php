<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";

    public function room()
    {
        return $this->belongsToMany('App\Rooms', 'service_rooms', 'id_room', 'id_service');
    }
}
