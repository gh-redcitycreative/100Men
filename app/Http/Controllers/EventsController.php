<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventsController extends Controller
{
    public function index()
    {
    	return view(events.index);
    	
    }
}
