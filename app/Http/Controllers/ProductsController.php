<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function searchName(Request $request)
    {
        $search=$request->search.'%';
        $result = DB::table('products')->where('name', 'like',$search)
        ->get();
        return view('/home')->with('products',$result);
    }

    public function getAddCart(Request $request,$id)
    {
        $product = Product::find($id);
        $oldCart= Session::has('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function reduceByOne($id)
    {
        $oldCart= Session::has('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);

        Session::put('cart',$cart);
        return redirect()->back();


    }
    public function removeAll($id)
    {
        $oldCart= Session::has('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        Session::put('cart',$cart);
        return redirect()->back();

    }
    public function getCart()
    {
        if(!Session::has('cart'))
        {
            return view('cart');
        }
        $oldCart=Session::get('cart');
        $cart= new Cart($oldCart);
        return view('cart')->with(['products' => $cart->items,'totalPrice'=>$cart->totalPrice]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
