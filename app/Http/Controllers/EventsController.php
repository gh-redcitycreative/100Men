<?php

namespace App\Http\Controllers;


use App\Event;
use DB;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index()
    {
    	$events = Event::all();

    	return view('events.index', compact('events'));	

    }



    public function show(Event $event)
    {
         
    	 return view('events.show', compact('event'));
    }


    public function addEvent(Request $request)
    {

    	$event = new Event;
        $event->create($request->all());
        return back();
    }

}


