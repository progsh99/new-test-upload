<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/add', function () {
    return view('add');
});

Route::post('/upload', function (Request $request) {

    $validatedData = $request->validate([
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
       ]);
       $name = $request->file('image')->getClientOriginalName();
       $path = $request->file('image')->store('public/uploads');
     
    dd("ok is stored");
    
});
