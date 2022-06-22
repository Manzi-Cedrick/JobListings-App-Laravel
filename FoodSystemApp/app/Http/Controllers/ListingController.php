<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    //
    public function index(){
        $data['title']='Listings Route';
        $data['listings']= Listing::all();
        return view('listings',$data);
    }
    public function displayListing(Listing $listing){
        $data['listings']= $listing;
        return view('edit',$data);
    }
}
