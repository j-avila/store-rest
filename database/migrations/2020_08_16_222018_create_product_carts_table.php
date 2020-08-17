<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();
            $table->integer('cart_id')->nullable();
            $table->json('products')->default('vacio');
            $table->integer('total_price')->default(0);
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('Carts')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_carts');
    }
}
