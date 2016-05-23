<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charity;
// use App\Http\Requests;
use DB;
//use App\Http\Controllers\Controller;



class VotesController extends Controller
{
 

    public function store(Request $request, Charity $charity)
    {
        $vote = new Vote($request->all());
        $vote->user_id = \Auth::User()->id;
        $charity->addVote($vote);
    	return back();
    }



}
