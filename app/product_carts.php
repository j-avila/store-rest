<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_carts extends Model
{
    protected $fillable =  ['cart_id', 'total_price', 'products'];
    protected $casts = [
        'products' => 'array'
    ];
}
