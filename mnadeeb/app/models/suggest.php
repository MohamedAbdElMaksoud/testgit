<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggest extends Model
{
    public $timestamps = false ;
    protected $table ='suggest';
    protected $fillable = [
        'client_name',
        'suggest',
        'dealer_id',
    ];
}
