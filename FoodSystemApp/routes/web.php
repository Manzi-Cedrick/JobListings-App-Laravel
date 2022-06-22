<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
    $data['title']='Listings Route';
    $data['listings']= Listing::all();
    return view('listings',$data);
});
Route::get('/listings/{listing}',function (Listing $listing) {
    $data['list']= $listing;
    return view('edit',$data);
});