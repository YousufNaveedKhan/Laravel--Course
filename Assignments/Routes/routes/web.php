<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Default Route
Route::get('/', function () {
    return view('welcome');
});

// Distinct route and view
Route::get('/home', function () {
    return view('info');
});

// Same route and view
Route::get('/contact', function () {
    return view('contact');
});

// Route with required parameter
Route::get('/mypost/{id}', function () {
    return view('post');
});

// Route with two optional parameters
Route::get("/post/{id?}/comment/{comment?}", function ($id = "Route with two optional parameters",$comment = "Route with two optional parameters") {
    echo "<h1>ID: " . $id . "</h1>";
    echo "<h1>ID: " . $comment . "</h1>";
});

// WhereAlpha Constraint
Route::get("/whereAlpha/{id?}", function ($id = "WhereAlpha Constraint") {
    echo "<h1>ID: " . $id . "</h1>";
})->whereAlpha("id");

// WhereNumber Constraint
Route::get("/whereNumber/{id?}", function ($id = "WhereNumber Constraint") {
    echo "<h1>ID: " . $id . "</h1>";
})->whereNumber("id");

// WhereAlphaNumberic Constraint
Route::get("/whereAlphaNumeric/{id?}", function ($id = "WhereAlphaNumeric Constraint") {
    echo "<h1>ID: " . $id . "</h1>";
})->whereAlphaNumeric("id");

// Where Constraint
Route::get("/where/{id?}", function ($id = "Where Constraint") {
    echo "<h1>ID: " . $id . "</h1>";
})->where("id", "[0-9 A-Z a-z]+");

// WhereIn Constraint
Route::get("/whereIn/{id?}", function ($id = "WhereIn Constraint") {
    echo "<h1>ID: " . $id . "</h1>";
})->whereIn("id", ["Khuzaima","Yousuf","Muneeb","Shoaib"]);
