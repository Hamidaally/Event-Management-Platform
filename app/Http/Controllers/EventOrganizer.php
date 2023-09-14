<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EventOrganizer extends Controller
{
    //
    public function index(){
        return view('eventdash');
    }
   
}
