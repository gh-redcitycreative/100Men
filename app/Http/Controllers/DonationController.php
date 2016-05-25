<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DonationController extends Controller
{
    public function donate(){
    	return view('donate');
    }
}