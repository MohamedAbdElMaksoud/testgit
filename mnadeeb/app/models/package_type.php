<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package_type extends Model
{
    public $timestamps = false ;
    protected $table ='package_type';
    protected $fillable = [
        'name',
        'cost',
    ];
}
