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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('posts', function (){
    return view('posts');
})->name('posts_listados');

Route::get('posts/{id}', function ($id){
    return view('ficha',compact('id'));
})->where('id','[0-9]+')->name('posts_ficha');