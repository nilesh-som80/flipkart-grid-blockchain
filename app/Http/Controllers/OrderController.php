<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Order::leftJoin('books','orders.book_id', '=' ,'books.book_id')
            ->leftJoin('users','orders.user_id', '=' ,'users.user_id')
            ->leftJoin('user_addresses','orders.address_id', '=' ,'user_addresses.address_id')
            ->select('orders.id as ord_id','orders.*','books.name as book_name','users.name as user_name','user_addresses.address as user_address')
            ->get();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['order_id'] = 'od_'.rand(1000000000,9999999999);
        Order::create($request->all());
        return "Added to cart";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return $order->join('books','orders.book_id', '=' ,'books.book_id')
        ->join('users','orders.user_id', '=' ,'users.user_id')
        ->leftJoin('user_addresses','orders.address_id', '=' ,'user_addresses.address_id')
        ->select('orders.id as ord_id','orders.*','books.name as book_name','users.name as user_name','user_addresses.address as user_address')
        ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return 'order details updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        if ($order->bought === null) {
            return 'item removed from cart';
        }else {
            return 'order deleted';
        }

    }
}
