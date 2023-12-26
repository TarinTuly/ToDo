<?php

use App\Http\Controllers\ItemControllar; 
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[ItemControllar::class,'showItem']);
Route::get('/add',[ItemControllar::class,'addItem']);
Route::get('/delete/{Sno}',[ItemControllar::class,'deletItem']);
Route::get('/edit/{Sno}',[ItemControllar::class,'editItem']);
Route::get('/edit/{Sno}',[ItemControllar::class,'editItem']);
Route::get('/update',[ItemControllar::class,'updateItem']);
