<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;


class ProfileController extends Controller
{
    //
   
       public function getEvent(){
           $events = Event::all();
return view('eventrate',['events'=>$events]);
    
    }
}
