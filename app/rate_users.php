<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rate_users extends Model
{
    protected $table = "rate_users";

    public function roomUsed()
    {
        return $this->belongsTo('App\RoomUsed', 'id_roomused', 'id');
    }
    public $timestamps = false;
}
