<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Location;
use App\Country;
use App\Region;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class LocationController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function locations()    { 
        
              
        $locations = Location::orderBy('location_name')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
         
        return view('admin.pages.locations',compact('locations'));
    }
    
    public function addeditLocation()    { 
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
		 
				 $countries = Country::where('status', '=', 1)->orderBy('country_name')->get();
				 $regions = Region::where('status', '=', 1)->get();
				 //echo"<pre>";print_r($regions);echo"</pre>";die();
				  $allCountries = Country::pluck('country_name','id')->all();
                  return view('admin.pages.addeditlocation',compact('countries','allCountries','regions'));
        

        //return view('admin.pages.addeditlocation');
    }
    public function ajax_country($cat_id)    { 
       //echo"tes";
        $regions = Region::where('country_id',$cat_id)->orderBy('region_name')->get();
//echo"<pre>";print_r($regions);echo"</pre>";die();
        return view('admin.pages.ajax_country',compact('regions'));
    } 
    public function addnew(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $rule=array(
				'country_id'=>'required',
				'region_id'=>'required',
                'location_name' => 'required' ,
				'location_slug' => 'required'   ,
				
				'status' => 'required'   
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $location = Location::findOrFail($inputs['id']);

        }else{

            $location = new Location;

        }
        
        
        if($inputs['location_slug']=="")
        {
            $location_slug = str_slug($inputs['location_name'], "-");
        }
        else
        {
            $location_slug =str_slug($inputs['location_slug'], "-"); 
        }
		
		$location->region_id = $inputs['region_id']; 
		$location->parent_id = $inputs['country_id']; 
        $location->status = $inputs['status']; 
        $location->location_name = $inputs['location_name']; 
        $location->location_slug = $location_slug;
         
        
         
        $location->save();
        
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }            
        
         
    }     
   
    
    public function editLocation($location_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $location = Location::findOrFail($location_id);
          
         $regions = Region::where('status', '=', 1)->get();
		$countries = Country::where('status', '=', 1)->get();     
		return view('admin.pages.addeditlocation',compact('location','countries','regions'));
        
    }	 
    
    public function delete($location_id)
    {
    	if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
        	
        $location = Location::findOrFail($location_id);
        $location->delete();

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
