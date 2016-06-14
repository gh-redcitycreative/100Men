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
      $users = User::all();
     
      $new_users = User::where('new_member', 0)->get();

      $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject()); 
      $csv->insertOne(\Schema::getColumnListing('users'));

     //return $new_users;
     
      foreach ($new_users as $new_user) {
       // return $new_user;
        $csv->insertOne($new_user->toArray());
        $new_user->new_member = 1; 
        $new_user->update();  
      }

     
      
    $csv->output('new-members.csv');
      

    }

    public function attended()
    {
    	$current_event = Current::find(1);
      //$users = User::all();
      $check = Checkin::all();
     $check_ins = Checkin::where('event_id', $current_event->event_id)->get();
     //return $check;
     //return $check_in;

      $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());
     
      $csv->insertOne(\Schema::getColumnListing('users'));
     
      foreach ($check_ins as $check_in) {
        $user = User::find($check_in->user_id);
        $csv->insertOne($user->toArray());
      }
    
      $csv->output('attendies.csv');
    }

    public function checklist()
    {
      $current_event = Current::find(1);
      //$users = User::all();
      $check = Checkin::all();
      $check_ins = Checkin::where('event_id', $current_event->event_id)->get();
      $checked = [];
      foreach ($check_ins as $check_in) {
        $user = User::find($check_in->user_id);
        array_push($checked, $user);
      }
      $checked = array_values(array_sort($checked, function ($value) {
          return $value['last_name'];
      }));
      return view('admin.checklist',  compact('checked'));
   }
   public function update_checklist(Request $request, User $user)
   {
        $user->update($request->all()); 
        return back();
   }


}
