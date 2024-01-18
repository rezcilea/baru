<?php

namespace App\Http\Controllers;

use App\Http\Controllers\itemController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These,
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/barang',[itemController::class, 'index']);

Route::get('/barang/create',[itemController::class, 'create']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/barang/store',[itemcontroller::class,'store']);
Route::get('/barang/{item}/edit',[itemcontroller::class,'edit']); 
Route::put('/barang/update/{item}',[itemcontroller::class,'update']);