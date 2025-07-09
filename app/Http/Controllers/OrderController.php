<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders=Order::where('status','>=',1)->get();
        return view('order',compact('orders'));
    }
    public function status($id){
        $order=Order::find($id);
        $order->status=$order->status+1;
        $order->save();
        return back();
    }
}
