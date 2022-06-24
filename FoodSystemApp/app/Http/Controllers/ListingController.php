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
        $data['listings']= Listing::latest()->filter(request(['tags','search']))->paginate(4);
        return view('listings.listings',$data);
    }
    public function displayListing(Listing $listing){
        $data['listings']= $listing;
        return view('listings.singlelist',$data);
    }
    public function createForm(){
        // return 'hello';
        return view('listings.create');
    }
    public function storeForm(Request $request){
        dd($request->file('logo'));
        $formFields = $request->validate([
            'title' => 'required',
            'company'=>'required',
            'location' => 'required',
            'email'=>'required',
            'website' => 'required',
            'description'=>'required',
            'tags' => 'required'
        ]);
        Listing::create($formFields);
        return redirect('/')->with('message','Job Listing successfully created');
    }
}
