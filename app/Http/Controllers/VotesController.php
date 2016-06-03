<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Charity;
use App\Vote;
use App\Http\Requests;
use DB;



class VotesController extends Controller
{
    public function store(Request $request, Charity $charity)
    {
    	$passcode = $request->get('passcode');
        $event = \App\Event::find($charity->event_id);

        if($passcode == $event->passcode){
            $vote = new Vote();
            $vote->user_id = \Auth::User()->id;
            $charity->addVote($vote);
            $vote->charity_id = $charity->id;  
	        return redirect('/voted');
        }
        else{
            // flash message
           return back(); 
        }
    }

    public function newVote(Request $request, Charity $charity)
    {
        return view('votes.voting', compact('charity'));
    }
}
