<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Current;
use App\Checkin;
use App\User;
use App\Http\Requests;

class ReportController extends Controller
{
     public function export()
    {
      // checked in user where event id is current event
      $current = Current::first();
      $currentEvent = Event::find($current->event_id);
      //    $attened = $currentEvent->checkin;

      $checked = Checkin::all();
      $oneCheckin = Event::find($currentEvent->id);
      $allCheckins =  $oneCheckin->checkin;
      return $allCheckins;
              
      //       $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());

      //       $csv->insertOne(\Schema::getColumnListing('users'));

      //       foreach ($users as $user) {
      //    $csv->insertOne($user->toArray());
      // }

      // $csv->output('users.csv');      
    }

    public function attended()
    {
    	
      $users = User::all();
     
      $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());
     
      $csv->insertOne(\Schema::getColumnListing('users'));
     
      foreach ($users as $user) {
        $csv->insertOne($user->toArray());
      }
    
      $csv->output('users.csv');
    }



}
