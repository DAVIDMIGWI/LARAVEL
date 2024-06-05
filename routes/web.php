<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\feecontroller;
Route::get('/fee', [feecontroller::class, 'index']);
Route::get('/storefee', [feecontroller::class, 'store']);
Route::get('/updatefee/{id}', [feecontroller::class, 'update']);
Route::get('/delete/{id}', [feecontroller::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');



});


 
