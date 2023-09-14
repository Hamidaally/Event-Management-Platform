<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use RealRashid\SweetAlert\Facades\Alert;



class EventController extends Controller
{
    //
   /* public function eventShow(){
        return view('eventdash');
    }*/

    public function showData(Request $request){
    $event = new Event;
    $event->ename = $request->ename;
    $event->description = $request->desc;
    $event->location = $request->location;
    $event->types = $request->types;
    $event->pricing = $request->price;
    $event->date = $request->date;
    $event->time = $request->time;
   $event->save();


   return back()->with('toast_success', 'Event Created Successfully!');

  
  

    }
}
    