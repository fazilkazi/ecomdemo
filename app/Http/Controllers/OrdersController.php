<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function checkout()
     {
        
        
        $oldCart= Session::has('cart') ? Session::get('cart') :null;
        if(!$oldCart)
        {
            return redirect(route('home'));
        }
        $cart = new Cart($oldCart);
        $products=$cart->items;
        foreach($products as $product)
        {
            Order::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product['item']['id'],
                'price' => $product['item']['price'],
                'qty' => $product['qty'],
                'total_price' =>$product['price'],
            ]);
        }
       Session::forget('cart');  
       session()->flash('success','Purchased  Successfully');
       return redirect()->back();

     }
    public function index()
    {
        //
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
