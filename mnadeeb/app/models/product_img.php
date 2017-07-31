<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_img extends Model
{
    public $timestamps = false ;
    protected $table ='product_img';
    protected $fillable = [
        'img',
        'product_img',
    ];
}
