<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    public $timestamps = false ;
    protected $table ='contact_us';
    protected $fillable = [
        'name',
        'mobile',
        'msg',
        'user_id',
    ];
}
