<?php

namespace App\Http\Controllers;

use App\product_carts;
use App\carts;
use Illuminate\Http\Request;

class ProductCartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_cart = product_carts::all();
        return $products_cart;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products_cart = product_carts::create($request->all());
        return $products_cart;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product_carts  $product_carts
     * @return \Illuminate\Http\Response
     */
    public function show(product_carts $product_carts, $id)
    {
        $cart = Carts::where('id', $id)->firstOrFail();
        return $cart;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product_carts  $product_carts
     * @return \Illuminate\Http\Response
     */
    public function edit(product_carts $product_carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product_carts  $product_carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products_cart = product_carts::find($id);

        $products_cart->cart_id = $request->get('cart_id');
        $products_cart->products = $request->get('products');
        $products_cart->save();
        return $products_cart;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product_carts  $product_carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_carts $product_carts)
    {
        //
    }
}
