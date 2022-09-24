<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show($slug)
    {
        $restaurant = User::where("slug", $slug)->first();

        $restaurant->load("dishes");

        if ($restaurant->restaurant_img) {
            $restaurant->restaurant_img = asset("storage/" . $restaurant->restaurant_img);
        } else {
            $restaurant->restaurant_img = asset("img/placeholder.jpg");
        }

        return response()->json($restaurant);
    }
}
