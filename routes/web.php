<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $result=DB::table('categories')->get();
    return view('welcome',['categories'=>$result]);
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/product', function () {
    return view('product');
});
