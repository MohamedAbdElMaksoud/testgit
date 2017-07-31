<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dealer extends Model
{
    public $timestamps = false ;
    protected $table ='dealer';
    protected $fillable = [
        'dealer_id',
        'minmum',
        'maxmum',
        'payment_type',
        'category_id',
        'delivery_time_min',
        'delivery_time_max',
    ];
}
