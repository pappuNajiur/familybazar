<?php

namespace App\product;


use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'product_name', 'cat_id','product_des','product_price','product_image','product_status',
    ];
    
}
