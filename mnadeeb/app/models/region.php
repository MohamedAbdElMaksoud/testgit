<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    public $timestamps = false ;
    protected $table ='region';
    protected $fillable = [
        'country_id',
        'en_name',
        'ar_name',
    ];
}
