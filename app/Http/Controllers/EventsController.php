<?php

namespace App\Http\Controllers;


use App\Event;
use App\Current;
use App\Checkin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index()
    {
        $current = Current::first();
        $currentEvent = Event::find($current->event_id);
    	$events = Event::orderBy('created_at', 'desc')->get();
    	return view('events.index', compact('events','currentEvent'));	
    }

    public function show(Event $event)
    {     
    	return view('events.show', compact('event'));
    }
    public function passcode(Event $event)
    {     
        return view('events.passcode', compact('event'));
    }

    public function current()
    {
        $user  = \Auth::User()->id;
        $current = Current::first();
        $currentEvent = Event::find($current->event_id);
        return view('events.current', compact('currentEvent', 'user'));  
    }

    public function updateCurrent(Event $event)
    {
        $current = Current::first();
        $current->event_id = Event::find($event->id)->id;
        $current->update();
        return back();  
    }


    // add event form
    public function add()
    {
        return view('events.add');
    }
    // saving the new event
    public function addEvent(Request $request)
    {
        // return $request->all();
    	$event = new Event;
        $event->create($request->all());
        return redirect('new-event');
    }


    public function editEvent(Event $event)
    { 
        return view('events.edit', compact('event'));
    }   
    public function update(Request $request, Event $event)
    {
        $event->update($request->all()); 
        return redirect('/events');

    }
    public function delete(event $event)
    {
        $event->delete();
        return back();
    }



     public function checkIn(Request $request, Event $event)
    {
        $checkIn = new CheckIn();
        $checkIn->user_id = \Auth::User()->id;
        $checkIn->event_id = Event::find($event->id)->id;
        $checkIn->save();

        return redirect('/checked-in');

    }
}


