<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{

    public function Event()
    {
    	return $this->belongsTo('App\Event');
    }

}
