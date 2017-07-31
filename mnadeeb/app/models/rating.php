<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    public $timestamps = false ;
    protected $table ='rating';
    protected $fillable = [
        'receiver_id',
        'sender_id',
        'rate',
    ];
}
