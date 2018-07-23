<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';

    protected $fillable = ['region_name', 'region_slug'];


	public $timestamps = false;
   
}
