<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $orders = Auth::user()->orders;

        return view('pages.order.index', compact([
            'orders',
            'categories'
        ]));
    }

    public function store(Request $request){
        $userId = Auth::user()->id;

        $menuId = $request->menu_id;

        $order = Order::where('user_id', $userId)->where('menu_id', $menuId)->first(); 

        if($order){
            $order->quantity += 1;
            $order->update();
        }else{
            $order = new Order;
            $order->menu_id = $menuId;
            $order->user_id = $userId;
            $order->save();
        }

        return redirect()->back()->with('success', 'Add to my order');
    }
}
