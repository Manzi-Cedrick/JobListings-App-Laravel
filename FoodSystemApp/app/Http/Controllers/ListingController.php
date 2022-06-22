<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    //
    public function index(){
        //we are going to filter using the scope filter in the controller
        // dd(request('tag'));
        $data['title']='Listings Route';
        $data['listings']= Listing::latest()->filter(request(['tags','search']))->get();
        return view('listings.listings',$data);
    }
    public function displayListing(Listing $listing){
        $data['listings']= $listing;
        return view('listings.singlelist',$data);
    }
    public function create(){
        return view('listings.createlistings');
    }
}
