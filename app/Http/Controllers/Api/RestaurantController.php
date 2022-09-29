<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewOrdersMail;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RestaurantController extends Controller
{
    public function show($slug)
    {
        $restaurant = User::where("slug", $slug)->first();

        $restaurant->load("dishes","categories");

        if ($restaurant->restaurant_img) {
            $restaurant->restaurant_img = asset("storage/" . $restaurant->restaurant_img);
        } else {
            $restaurant->restaurant_img = asset("img/placeholder.jpg");
        }

        return response()->json($restaurant);
    }

    public function orders(Request $request){

        $data = $request->validate([
            "name" =>"required|string|max:25|min:1",
            "surname" => "required|string|max:25|min:1",
            "address" => "required|max:70|min:5",
            "mail" => "required|email|max:255",
            "phone" => "required|digits_between:8,12",
            "user_id" => "required",
            "code" => "required",
            "total_price" => "required",
        ]);

        $order = Order::create([
            "user_id" => $data["user_id"],
            "name" => $data["name"],
            "surname" => $data["surname"],
            "address" => $data["address"],
            "mail" => $data["mail"],
            "phone" => $data["phone"],
            "code" => $data["code"],
            "total_price" => $data["total_price"],
        ]);

        Mail::to($order->mail)->send(new NewOrdersMail($order));
        
        return response()->json($order);  
    }
}
