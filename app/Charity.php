<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
	protected $fillable = ['title', 'body'];
   
    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function votes()
    {
    	 return $this->hasMany('App\Vote');
    }
    public function addVote(Vote $vote)
    {       
        return $this->votes()->save($vote);
    }
        
 
}

