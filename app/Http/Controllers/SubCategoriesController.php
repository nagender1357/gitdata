<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Listings;
use App\Categories;
use App\SubCategories;
use App\Location;
use App\ListingGallery;
use App\Reviews;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class SubCategoriesController extends Controller
{
	
    public function subcategories_old(Request $request, $category_slug,$sub_category_slug,$sub_cat_id)    { 
        
             
       $listings = Listings::where(array('status'=>'1','sub_cat_id'=>$sub_cat_id))->orderBy('id','desc')->paginate(9);

       $listings->setPath($request->url());
          
       $sub_cat = Categories::findOrFail($sub_cat_id);
       return view('pages.listingsbysubcategories',compact('listings','sub_cat'));
    }
      public function subcategories(Request $request, $category_slug,$sub_category_slug,$sub_cat_id)    { 
        
             
       $listings = Listings::where(array('status'=>'1','sub_cat_id'=>$sub_cat_id))->orderBy('id','desc')->paginate(9);

       $listings->setPath($request->url());
         // echo"sub_cat_id-$sub_cat_id";
		  $sub_cats = Categories::where('id',$sub_cat_id)->orderBy('category_name')->first();
		//  echo "category_name--".$sub_cats->category_name."<br>";
		  $cats = Categories::where('id',$sub_cats->parent_id)->orderBy('category_name')->first();
		  echo "<b>Home</b>&nbsp-->&nbsp<b>".$cats->category_name."</b>&nbsp-->&nbsp<b>".$sub_cats->category_name."</b><br><hr>";
       $sub_sub_cats = Categories::where('parent_id',$sub_cat_id)->orderBy('category_name')->get();
	
	echo"<style>
.subcate_class{width:30%;float:left;}
</style><ul>";
	foreach($sub_sub_cats as $i => $subcat) 
	{	
echo'<li class="subcate_class">';
$url=$category_slug.'/'.$sub_category_slug.'/'.$subcat->category_slug.'/'.$subcat->id;
echo "<a href='".$url."'>".$subcat->category_name."</a>";
echo"</li>";
	}
	echo"</ul>";
	die();
       return view('pages.allsubcategories',compact('listings','sub_cats'));
	   
    }
      public function subsubcate(Request $request, $category_slug,$sub_category_slug,$sub_sub_category_slug,$sub_sub_cat_id)    { 
        
             
       $listings = Listings::where(array('status'=>'1','sub_sub_cat_id'=>$sub_sub_cat_id))->orderBy('id','desc')->paginate(9);

       $listings->setPath($request->url());
          
       $sub_cat = Categories::findOrFail($sub_sub_cat_id);
       return view('pages.listingsbysubcategories',compact('listings','sub_cat'));
	  // return view('pages.allsubcategories',compact('listings','sub_cats'));
    }
     
     
    	
}
