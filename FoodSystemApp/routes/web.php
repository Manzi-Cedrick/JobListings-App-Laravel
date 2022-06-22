<?php

use Illuminate\Support\Facades\Route;
use App\Model\Listings;

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
    $data['listings']= Listings::getAll();
    return view('listings',$data);
});
