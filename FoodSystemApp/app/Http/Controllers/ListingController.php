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
        $data['listings']= Listing::latest()->filter(request(['tag']))->get();
        return view('listings',$data);
    }
    public function displayListing(Listing $listing){
        $data['listings']= $listing;
        return view('edit',$data);
    }
}
