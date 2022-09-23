<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {

        $categories = Category::all();

        $categories->map(function ($category) {

            if ($category->img) {
                $category->img = asset("img/" . $category->img);
            } else {
                $category->img = asset("img/placeholder.jpg");
            }


            return $category;
        });

        return response()->json($categories);
    }
}
