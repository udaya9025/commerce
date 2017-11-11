<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=[
    	'producttitle','sku','category','brand','mrp','offer','description','image','quantity','url'
    ];
}
