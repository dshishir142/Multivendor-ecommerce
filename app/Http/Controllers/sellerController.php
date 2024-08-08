<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    public function index(){
        return view('seller.home');
    }
    public function addProduct(){
        return view('seller.addProduct');
    }
    public function orders(){
        $orders = Order::all();
        return view('seller.orders')->with('orders', $orders);
    }
    public function storeProduct(){
        echo "Hello";
    }

}
