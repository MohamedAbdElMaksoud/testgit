<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offers extends Model
{
    public $timestamps = false ;
    protected $table ='offers';
    protected $fillable = [
        'offer_name',
        'desc',
        'img',
        'price',
        'dealer_id',
        'offer_name_en',
        'desc_en',
    ];
}
