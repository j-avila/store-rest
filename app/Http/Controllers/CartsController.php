<?php

namespace App\Http\Controllers;

use App\carts;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        if($id)
        {
            $cart = array(
                'cart' => Carts::where('id', $id)->firstOrFail(),
                'product_carts' => product_carts::where('cart_id', $id)->firstOrFail()
            );
            return $cart;

        } else {
            $cart = Carts::all();
            return $cart;
        }
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
        $cart = Carts::create($request->all());
        return $cart;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function show(carts $carts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function edit(carts $carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Carts::find($id);
        $cart->status = $request->get('status');
        $cart->save();
        return $cart;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(carts $carts)
    {
        //
    }
}
