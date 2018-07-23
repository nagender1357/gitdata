<?php

namespace App;
use App\Listings;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = ['category_icon','category_name', 'category_slug','parent_id'];


	public $timestamps = false;
 
	     public function childs() {

        return $this->hasMany('App\Categories','parent_id','id') ;

    }
	public static function getSub($id) 
    { 
		if($id==0)
		{
			return "Top Category";
		}
		else
		{
			 
			$catone = DB::table('categories')->where('id', $id)->first();
			return $catone->category_name;
		}
	}
	public static function getCategoryInfo($id) 
    { 
		return Categories::find($id);
	}

	public static function countCategoryListings($id) 
    { 
		return Listings::where(['cat_id' => $id,'status' => '1'])->count();
	}
}
