<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  	public function charities()
  	{
  		return $this->hasMany('App\Charity');
  	}
}
