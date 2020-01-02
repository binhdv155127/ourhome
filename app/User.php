<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slugs','deleted_at','auth','updt'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function room()
    {
        return $this->hasmany('App\Rooms', 'id_user', 'id');
    }

    public function message()
    {
        return $this->belongsToMany('App\Rooms', 'messages', 'id_room', 'id_user');
    }

    public function roomCare()
    {
        return $this->belongsToMany('App\Rooms', 'room_cares', 'id_room', 'id_user');
    }

    public function rateRoom()
    {
        return $this->hasManyThrough('App\RoomUsed', 'App\rate_rooms', 'id_roomused', 'id_user', 'id');
    }

    public function roomUsed()
    {
        return $this->hasmany('App\RoomUsed', 'id_user', 'id');
    }
}
