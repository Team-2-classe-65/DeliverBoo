<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Dish;
use App\Category;
use App\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    private function findBySlug($slug)
    {
        $dish = Dish::where("slug", $slug)->first();

        if (!$dish) {
            abort(404);
        }

        return $dish;
    }

    private function generateSlug($text)
    {
        $toReturn = null;
        $counter = 0;


        do {
            $slug = Str::slug($text);

            if ($counter > 0) {
                $slug .= "-" . $counter;
            }
            $slug_exist = Dish::where("slug", $slug)->first();
            if ($slug_exist) {
                $counter++;
            } else {
                $toReturn = $slug;
            }
        } while($slug_exist);

        return $toReturn;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();
        
        return view("admin.dishes.index", compact("dishes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.dishes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|min:1",
            "description" => "required|min:10",
            "price" => "required",
            "dish_img" => "required|image",
        ]);

        $dish = new Dish();
        $dish->fill($validatedData);
        $dish->user_id = Auth::user()->id;
        $dish->slug = $this->generateSlug($dish->name);
        $dishImg = Storage::put("/dish_images", $validatedData["dish_img"]);
        $dish->dish_img = $dishImg;

        $dish->save();

        return redirect()->route("admin.dishes.show", $dish->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $dish = $this->findBySlug($slug);
        return view("admin.dishes.show", compact("dish"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $dish = Dish::where('slug', $slug)->first();
        $categories = Category::all();
        return view("admin.dishes.edit", compact("dish", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            "name" => "required|min:1",
            "description" => "required|min:10",
            "category_id" => "nullable|exists:categories,id",
            "availability" => "required|true",
            "price',5,2" => "required|min:3.2",
            "dish_img" => "required|image",

        ]);

        $dish = Dish::where('slug', $slug)->first();

        if(key_exists("dish_img", $validatedData)) {
            if($dish->dish_img){
                Storage::delete($dish->dish_img);
            }
            $dishImg = Storage::put("/dish_img" , $validatedData["dish_img"]);

            $dish->dish_img = $dishImg;
        }
        
        if ($validatedData["title"] !== $dish->title) {
            $dish->slug = $this->generateSlug($validatedData["title"]);
        }

        $dish->update($validatedData);

        return redirect()->route("admin.dishes.show", $dish->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $dish = Dish::where('slug', $slug)->first();
        $dish->delete();
        return redirect()->route("admin.dishes.index");
    }
}
