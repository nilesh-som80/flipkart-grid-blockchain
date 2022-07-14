<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Order;
use App\Models\SellersBook;
use Illuminate\Http\Request;
use App\Models\TransactionItems;
use App\Models\TransactionDetails;
use App\Mail\OrderConfirmationMail;
use Softon\Indipay\Facades\Indipay;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PayUMoneyController extends Controller
{
    public function initateTransaction(Request $request){
        // dd($request);
        // $transaction_id = random_bytes(30);
        $request->validate([

        ]);
        $transaction_id = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        Session::put('transaction_id',$transaction_id);
        $request->session()->put('order_id', $request->order_id);
        // dd(Session::get('transaction_id'));
        $parameters = [
            'key' => 'tEl0If',
            'txnid' => $transaction_id,
            'surl' => url('/payumoney/success'),// this is the name of my route
            'furl' => url('/payumoney/failure'),//this is the name of my route
            'firstname' => $request->name,
            'email' => Auth::user()->email,
            'phone' => Auth::user()->mobile,
            'productinfo' => $request->order_id,
            'service_provider'=>'E-Cell MANIT',
            'amount' => $request->total_price,
    ];
        // dd($parameters);
        $order = Indipay::prepare($parameters);
        return Indipay::process($order);
    }
    public function success(Request $request){
        // dd($request);
        $transaction_id = $request->txnid;
        $transaction = TransactionDetails::where('bill_number', $transaction_id)->first();
        $user = User::where('name',$request->firstname)->first();
        if($transaction)
        {
            Auth::loginUsingId($user->id);
            return "Bill Number already exists";
        }
        $order = explode(' ',$request->productinfo);
        $order_1 = Order::where('order_id', $order[0])->first();
        Auth::loginUsingId($user->id);
        TransactionDetails::create([
            'bill_number'=>$transaction_id,
            'user_id' => $user->user_id,
            'amount' => $request->amount,
            'address_id' => $order_1->address_id,
        ]);
        foreach ($order as $od) {
            TransactionItems::create(
                [
                    'bill_number'=>$transaction_id,
                    'order_id'=>$od,
                ]
            );
            Order::where('order_id', $od)->update(['bought' => true,'timestamp_of_purchase' => time()]);
            $order_2 = Order::where('order_id', $od)->first();
            $seller_book = Book::where(['seller_id' => $order_2->seller_id, 'book_id' => $order_2->book_id])->first();

            $stock = (int)$seller_book->current_stock;

            $seller_book->update(['current_stock' => $stock - 1]);

        }
        $user_data = TransactionDetails::where('bill_number', $transaction_id)
        ->join('user_addresses', 'user_addresses.address_id', '=', 'transaction_details.address_id')
        ->first();
        $data = TransactionDetails::where(['transaction_details.user_id'=> $user->user_id , 'transaction_details.bill_number' => $transaction_id])
        ->join('transaction_items','transaction_details.bill_number', '=', 'transaction_items.bill_number')
        ->join('orders','transaction_items.order_id', '=', 'orders.order_id')
        ->leftJoin('books as b', 'b.book_id', '=', 'orders.book_id')
        ->selectRaw("transaction_details.*")
        ->selectRaw('b.*')
        ->selectRaw('orders.*')
        ->selectRaw('orders.id as od_id')
        ->get();
        $totalprice = TransactionDetails::where(['transaction_details.user_id'=> $user->user_id , 'transaction_details.bill_number' => $transaction_id])
        ->join('transaction_items','transaction_details.bill_number', '=', 'transaction_items.bill_number')
        ->join('orders','transaction_items.order_id', '=', 'orders.order_id')
        ->selectRaw('SUM(orders.selling_price) as total_price')
        ->groupBy('orders.id')
        ->first();
        $totalprice = $totalprice->total_price;
        $shipping = $user_data->amount - $totalprice;
        Mail::to($user->email)->send(new OrderConfirmationMail($data,$user_data,$totalprice, $shipping));
        // dd($totalprice);
        return view('user.order_received', compact('data', 'user_data', 'totalprice'));
        // return(new OrderConfirmationMail($data,$user_data,$totalprice));
    }
    public function failure(Request $request){
        // echo 'failure';
        return view('user.failure');
    }
}
