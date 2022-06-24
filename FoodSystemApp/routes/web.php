<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
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

Route::get('/',[ListingController::class,'index']);
Route::get('/listings/{listing}',[ListingController::class,'displayListing']);
Route::get('/create',[ListingController::class,'createForm']);
Route::post('/store',[ListingController::class,'storeForm']);
Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

//Common naming conventions
//index - show all listings
// show - show single listings
// create - show form to create new Listings
// store - store new listings
// edit - show form to edit existing listings
// update - update existing listings
// destroy - delete existing listings