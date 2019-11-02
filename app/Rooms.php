<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = "rooms";

    public function province()
    {
        return $this->belongsTo('App\Provinces', 'id_province', 'id');
    }

    public function district()
    {
        return $this->belongsTo('App\Districts', 'id_district', 'id');
    }

    public function ward()
    {
        return $this->belongsTo('App\Wards', 'id_ward', 'id');
    }

    public function service()
    {
        return $this->belongsToMany('App\Services', 'service_rooms', 'id_room', 'id_service');
    }

    public function roomType()
    {
        return $this->hasone('App\RoomType', 'id_roomtype', 'id');
    }

    public function photo()
    {
        return $this->hasmany('App\Photo', 'id_room', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function message()
    {
        return $this->belongsToMany('App\User', 'messages', 'id_room', 'id_user');
    }

    public function roomCare()
    {
        return $this->belongsToMany('App\User', 'room_cares', 'id_room', 'id_user');
    }

    public function rateRoom()
    {
        return $this->hasManyThrough('App\room_useds', 'App\rate_rooms', 'id_roomused', 'id_user', 'id');
    }
}
