<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invitation extends Model
{
    public $timestamps = false ;
    protected $table ='invitation';
    protected $fillable = [
        'number_user',
        'gift',
    ];
}
