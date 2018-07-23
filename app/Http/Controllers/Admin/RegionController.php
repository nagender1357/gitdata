<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Region;
use App\Country;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class RegionController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function region()    { 
       
        $regions = Region::orderBy('region_name')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
         
        return view('admin.pages.region',compact('regions'));
    }
    
    public function addeditRegion()    { 
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
		 
				  $countries = Country::where('status', '=', 1)->get();
				 // echo"<pre>";print_r($countries);echo"</pre>";die();
				  $allCountries = Country::pluck('country_name','id')->all();
                  return view('admin.pages.addeditregion',compact('countries','allCountries'));
        

       // return view('admin.pages.addeditregion');
    }
    
    public function addnew(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $rule=array(
                'region_name' => 'required' ,
				'region_slug' => 'required'   ,
				'status' => 'required'   
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $region = Region::findOrFail($inputs['id']);

        }else{

            $region = new Region;

        }
        
        
        if($inputs['region_slug']=="")
        {
            $region_slug = str_slug($inputs['region_name'], "-");
        }
        else
        {
            $region_slug =str_slug($inputs['region_slug'], "-"); 
        }
		
		$region->country_id = $inputs['country_id']; 
        $region->status = $inputs['status']; 
        $region->region_name = $inputs['region_name']; 
        $region->region_slug = $region_slug;
         
        
         
        $region->save();
        
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }            
        
         
    }     
   
    
    public function editRegion($region_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $region = Region::findOrFail($region_id);
          
           
		$countries = Country::where('status', '=', 1)->get();     
		return view('admin.pages.addeditregion',compact('region','countries'));
        
    }	 
    
    public function delete($region_id)
    {
    	if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
        	
        $region = Region::findOrFail($region_id);
        $region->delete();

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
