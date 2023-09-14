<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Attendee extends Controller
{
    //
    public function index(){
        $events = Event::all();
         
      return view('attendeedash',['events'=>$events]);
      }

      public function updateStatus(Request $request)
      {
          $event = Event::find($request->event_id); 
         $event->status = $request->status; 
          $event->save();
          return response()->json(['success'=>'Status change successfully.']); 
        
      }
      
      public function markAsRead(){
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }
     }
