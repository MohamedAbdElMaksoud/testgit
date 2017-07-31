<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addresses extends Model
{
    public $timestamps = false ;
    protected $table ='addresses';
    protected $fillable = [
        'client_id',
        'address_name',
        'area_id',
        'address_type',
        'street_name',
        'judda',
        'block',
        'house_name',
        'directions_for_delivery',
        '_lat',
        '_lng',
    ];
}
