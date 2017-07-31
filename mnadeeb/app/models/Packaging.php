<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    public $timestamps = false ;
    protected $table ='Packaging';
    protected $fillable = [
        'name_ar',
        'name_en',

    ];
}
