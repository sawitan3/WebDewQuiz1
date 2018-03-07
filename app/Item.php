<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
	   	'category_id','name', 'price', 'stock'
    ];

    public function categories(){
    	return $this->belongsTo('App\Category', 'id');
    }
}
