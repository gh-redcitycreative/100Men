<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

   public function charity()
	{
	   	return $this->belongsTo('App\Charity');
	}
	public function user()
    {
    	return $this->belongsTo(User::class);
    }

    	
}
