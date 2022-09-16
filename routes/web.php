<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware("auth")
->namespace("Admin")
->name("admin.")
->prefix("admin")
->group(function() {
    Route::get('/', "HomeController@index")->name("home");
    Route::get("/dishes", "DishController@index")->name("dishes.index");
    Route::get("/dishes/{dish}", "DishController@update")->name("dishes.update");
    Route::get("/dishes/{dish}/edit", "DishController@edit")->name("dishes.edit");
    Route::get("/categories/{category}/dishes", "CategoryController@dishes")->name("categories.dishes");
    Route::resource("dishes", "DishController");
});

Route::get('/home', 'HomeController@index')->name('home');
