<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appendController;
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
//     return view('welcome');
// });
// Route::get('i', function () {
//     return view('index');
// });
// Route::get('c', function () {
//     return view('card');
// });
// Route::get('f', function () {
//     return view('form');
// });

// Route::get('user/{name?}', function ($name=null) {
//     $id='1';
//     $data = compact('name','id');
//     return view('user',$data);
// });

Route::get('form',[appendController::class,'Append']);
Route::post('data',[appendController::class,'insert']);

Route::get('showdata',[appendController::class,'showdata']);
Route::get('delete/{id}',[appendController::class,'delete']);
Route::get('edit/{id}',[appendController::class,'edit']);
Route::post('update/{id}',[appendController::class,'update']);



// Route::get('footer',[appendController::class,'Append']);