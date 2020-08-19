<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_carts extends Model
{
    protected $fillable =  ['cart_id','products'];
    protected $casts = [
        'products' => 'array'
    ];
}
