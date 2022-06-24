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
        $data['listings']= Listing::latest()->filter(request(['tags','search']))->paginate(6);
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
        $formFields = $request->validate([
            'title' => 'required',
            'company'=>'required',
            'location' => 'required',
            'email'=>'required',
            'logo' => 'required',
            'website' => 'required',
            'description'=>'required',
            'tags' => 'required'
        ]);
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }
        $formFields['user_id'] = auth()->id();
        if(Listing::create($formFields)){
            return redirect('/')->with('message','Job Listing successfully created');
        };
    }
    public function edit(Listing $listing){
        return view('listings.editForm',['listings'=>$listing]);
    }
    public function updateForm(Request $request,Listing $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'company'=>'required',
            'location' => 'required',
            'email'=>'required',
            'website' => 'required',
            'description'=>'required',
            'tags' => 'required'
        ]);
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }
        $listing->update($formFields);
        // return back()->with('message','Job Updated successfully created');
        // the back redirect is also available
        return redirect('/')->with('message','Job Listing Updated successfully created');
    }
    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message','Job Listing Deleted successfully');
    }
}
