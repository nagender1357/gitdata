<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $fillable = ['country_name', 'country_slug','parent_id'];


	public $timestamps = false;
	public static function getCountryName($id) 
    { 
		$catone = DB::table('country')->where('id', $id)->first();
			return $catone->country_name;
	}
   
}
