<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class codes extends Model
{
    public $timestamps = false ;
    protected $table ='codes';
    protected $fillable = [
        'code',
        'discount',
    ];
}
