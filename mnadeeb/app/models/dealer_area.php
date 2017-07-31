<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dealer_area extends Model
{
    public $timestamps = false ;
    protected $table ='dealer_area';
    protected $fillable = [
        'area_id',
        'dealer_id',
    ];
}
