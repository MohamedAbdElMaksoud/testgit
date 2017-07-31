<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    public $timestamps = false ;
    protected $table ='area';
    protected $fillable = [
        'name_en',
        'name_ar',
        'country_id',
    ];
}
