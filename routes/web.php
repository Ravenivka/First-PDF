<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDF;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});

Route::get("/print",[PDF::class,'print']);
Route::get("/preview",[PDF::class,'preview']);
Route::get("/convert",[PDF::class,'convert']);
