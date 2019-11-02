<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = "photos";

    public function room()
    {
        return $this->belongsTo('App\Rooms', 'id_room', 'id');
    }
}
