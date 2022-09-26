<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function index() 
    {
        $orders= Order::all();

        return view("admin.orders.index", compact("orders"));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view("admin.orders.edit", compact("order"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $order = Order::findOrFail($id);

        if(!$order->details){
            $order->details = new OrderDetail();
            $order->details->order_id = $order->id;
            $order->details->fill($data);
            $order->details->save();
        } else {
            $order->details->update($data);
        }

        $order->update($data);
        return redirect()->route("admin.orders.edit", $order->id);
    }

    // public function store(Request $request){

    //     $data = $request->validate([
    //         "name" =>["name"],
    //         "lastname" => "required|",
    //         "address" => "required|",
    //         "email" => "required|",
    //         "phone" => "required|",
    //     ]);

    //     $order = Order::create([
    //         "name" => $data["name"],
    //         "lastname" => $data["lastname"],
    //         "address" => $data["address"],
    //         "email" => $data["email"],
    //         "phone" => $data["phone"],
    //     ]);
    // }


}
