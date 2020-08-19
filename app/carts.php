<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $fillable = ["status, total_price"];

    public function productsList()
    {
        return $this->belongsTo(product_carts::class, "cart_id");
    }
}
