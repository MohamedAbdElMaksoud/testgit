<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'usertype',
        'date_created',
        'last_login',
        'lat',
        'lng',
        'img',
        'rate',
        'number_rating',
        'accounting',
        'note',
        'work_state',
        'area_id',
        'devicetoken',
        'balance',
    ];

    public function getRememberTokenName()
    {
        return null;
    }
}
