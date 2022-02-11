<?php

use Illuminate\Support\Facades\Route;

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

//route that returns my name
Route::get('/contact', function () {
    return 'Dylan Chan';
});

//second basic route that returns a statement idk what to call it
Route::get('/potato', function () {
    return 'Laravel makes it easy to develop websites!';
});

//advanced route?? thats returns parameter highlighted in red with numeric validation
Route::get('/uid/{id}', function ($id) {
    return "Id: $id";
})->where('id', '[0-9]+');


//need to do route grouping and stuff here sometime
/*
Route::get('/users/{name?}', function ($name = "batman") {
    return "Name: $name";
})->where("name","[a-zA-Z ]+")->name("users.show");

Route::get('/users/{name}/images/{num}', function ($name,$num) {
    return "Name:$name  Image: $num";
})->where(["name" => "[a-zA-Z ]+","num" => "[0-9]+"])->name("users.images.show");
*/
Route::group(["as" => "users.",
    "prefix" => "users",
    "where" =>["name"=>"[a-zA-Z]+","num"=>"[0-9]+"]], function () {
    //previous routes go inside the group closure function
    Route::get('/{name?}', function ($name = "batman") {
        return "Name: $name";
    })->name("show");

    Route::get('/{name}/images/{num}', function ($name, $num) {
        return "Name:$name  Image: $num";
    })->name("images.show");
});

//PART B ROUTE
//
Route::get("/aboutme",function(){
    $name=['fullName'=>'Dylan Chan'];
   return view('pages/about',$name);
})->name("aboutme");

Route::get("/thingsiknow",function(){
    $items = ['html','javascript','php','C#'];
    return view('pages/langs',compact("items"));
})->name("thingsiknow");

Route::get("/contact",function(){
   $email = ['email'=>'DC71@myscc.ca'];
   return view("pages/contact", $email);
})->name("contact");

//PART C ROUTES

Route::get("/articles",'ArticleController@index')->name('articles.index');
