<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventViewController extends Controller
{
    //
    public function index(){
        $events = Event::all();
        return view('eventview',['events'=>$events]);
     }
     public function edit(Event $event){
        // dd($event->id
        return view('edit',['event'=>$event]);
        } 
    // public function edit($id){
    //     $event = Event::find($id);
    //     return view('edit', ['event' => $event]);
    // }

    public function update( Request $request,Event $event){
            $event->ename = $request->ename;
            $event->description = $request->desc;
            $event->location = $request->location;
            $event->date = $request->date;
            $event->time = $request->time;
            $event->update();

     return back()->with('toast_success', 'Event updated Successfully!');
       

    }

    public function destroy(Event $event){
   $event->delete();
   return back();

   // echo "Event deleted successfully. <br/><br/>";
   // echo '<a href = "/eventShow">Go Back</a>' ;  
    }

}


