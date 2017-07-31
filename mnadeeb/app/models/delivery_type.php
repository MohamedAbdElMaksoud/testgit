<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delivery_type extends Model
{
    public $timestamps = false ;
    protected $table ='delivery_type';
    protected $fillable = [
        'name',
        'old_price',
        'new_price',
        'img',
        'dealer_id',
        'name_en',
    ];
}
