<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
	protected $fillable = ['title', 'body'];
   
    public function Event()
    {
    	return $this->belongsTo('App\Event');
    }

}
