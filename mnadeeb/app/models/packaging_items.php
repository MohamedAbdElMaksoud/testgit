<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class packaging_items extends Model
{
    public $timestamps = false ;
    protected $table ='packaging_items';
    protected $fillable = [
        'image',
        'pac_id',
    ];
}
