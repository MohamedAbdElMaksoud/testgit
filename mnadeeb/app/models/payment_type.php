<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_type extends Model
{
    public $timestamps = false ;
    protected $table ='payment_type';
    protected $fillable = [
        'name',
        'ar_name',
        'cost',
    ];
}
