<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Country;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class CountryController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function country()    { 
        
              
        $country = Country::orderBy('country_name')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
         
        return view('admin.pages.country',compact('country'));
    }
    
    public function addeditCountry()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }

        
	
        return view('admin.pages.addeditcountry');
    }
    
    public function addnew(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $rule=array(
                'country_name' => 'required'   ,   
				'country_slug' => 'required' ,  
				'status' => 'required'
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $country = Country::findOrFail($inputs['id']);

        }else{

            $country = new Country;

        }
        
        
        if($inputs['country_slug']=="")
        {
            $country_slug = str_slug($inputs['country_name'], "-");
        }
        else
        {
            $country_slug =str_slug($inputs['country_slug'], "-"); 
        }
        $country->status = $inputs['status']; 
        $country->country_name = $inputs['country_name']; 
        $country->country_slug = $country_slug;
         
        
         
        $country->save();
        
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }            
        
         
    }     
   
    
    public function editCountry($country_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $country = Country::findOrFail($country_id);
          
           

          return view('admin.pages.addeditcountry',compact('country'));
        
    }	 
    
    public function delete($country_id)
    {
    	if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
        	
        $country = Country::findOrFail($country_id);
        $country->delete();

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
