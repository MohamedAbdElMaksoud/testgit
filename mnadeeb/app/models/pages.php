<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    public $timestamps = false ;
    protected $table ='pages';
    protected $fillable = [
        'index_view',
        'form_view',
        'index_controller',
        'form_controller',
    ];
}
