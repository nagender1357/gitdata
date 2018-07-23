<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Listings;
use App\Categories;
use App\SubCategories;
use App\Location;
use App\ListingGallery;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class ListingsController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function listings()    { 
        
        
        $listings = DB::table('listings')
                           ->leftJoin('categories as cate', 'listings.cat_id', '=', 'cate.id')
                           ->leftJoin('categories as subcate', 'listings.sub_cat_id', '=', 'subcate.id')
                           ->select('listings.*','cate.category_name','subcate.category_name as sub_cate_name')
                           ->get();

       // $listings = Listings::orderBy('title')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
         
        return view('admin.pages.listings',compact('listings'));
    }
    
    public function featured_listing($listing_id,$status)
    {


        if(Auth::User()->usertype=="Admin")
        {
            
            $listing = Listings::findOrFail($listing_id);
 
            
            $listing->featured_listing = $status;
 
            $listing->save();
         
            \Session::flash('flash_message', 'Save changed');

            return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
             
        }
    }

    public function status_listing($listing_id,$status)
    {


        if(Auth::User()->usertype=="Admin")
        {
            
            $listing = Listings::findOrFail($listing_id);
 
            
            $listing->status = $status;
 
            $listing->save();
         
            \Session::flash('flash_message', 'Status changed');

            return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
             
        }
    }
      
    public function delete($listing_id)
    {
        if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
            
        $listing = Listings::findOrFail($listing_id);
        

        $listing_gallery_obj = ListingGallery::where('listing_id',$listing->id)->get();
        
        foreach ($listing_gallery_obj as $listing_gallery) {
            
            \File::delete('upload/gallery/'.$listing_gallery->image_name);
            \File::delete('upload/gallery/'.$listing_gallery->image_name);
            
            $listing_gallery_del = ListingGallery::findOrFail($listing_gallery->id);
            $listing_gallery_del->delete(); 

            
        }   

        
        \File::delete('upload/listings/'.$listing->featured_image.'-b.jpg');
        \File::delete('upload/listings/'.$listing->featured_image.'-s.jpg');    

        $listing->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        
        }
    }
     
    	
}
