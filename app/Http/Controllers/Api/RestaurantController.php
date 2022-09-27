<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;

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
            "name" =>"required|",
            "surname" => "required|",
            "address" => "required|",
            "mail" => "required|",
            "phone" => "required|",
            "user_id" => "required|",
            "code" => "required|",
            "total_price" => "required|",
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

        return response()->json($order);
    }
}
