<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $timestamps = false ;
    protected $table ='product';
    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'price',
        'fees',
        'dealer_id',
        'category_id',
        'admin_approval',
        'quantity',
        'sold_out',
        'remainder',
        'rate',
        'img',
        'product_return',
    ];
}
