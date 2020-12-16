<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ContactController;
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

//Route::get('/', function () {
//    return view('video.vimeo');
//});
Route::resource('contacts', 'App\Http\Controllers\ContactController');
Route::resource('video', 'App\Http\Controllers\VideoController');
