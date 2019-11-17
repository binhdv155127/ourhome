<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCare extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    protected function room() {
        return $this->belongsTo('App\Room');
    }
}
