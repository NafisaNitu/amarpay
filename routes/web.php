<?php

use App\Http\Controllers\paymentController;
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

// Route::get('/payment','paymentController@index');
Route::get('/payment',[paymentController::class,'index']);

Route::post('/success',[paymentController::class,'success'])->name('success');
// Route::post('/success','paymentController@success')->name('success');

Route::post('/fail',[paymentController::class,'fail'])->name('fail');
// Route::post('/fail','paymentController@fail')->name('fail');
