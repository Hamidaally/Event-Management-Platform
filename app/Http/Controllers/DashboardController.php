<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laratrust\Traits\LaratrustUserTrait;



class DashboardController extends Controller
{
    // public function first(){
    //     if(Auth::user()->hasRole == 'attendee'){
    //         return view('attendeedash');
    //     }elseif(Auth::user()->hasRole =='eventorganizer'){
    //         return view('eventdash');
        
    //     }elseif(Auth::user()->hasRole =='admin'){
    //         return view('dashboard');
    // }

    // public function first() {
    //     if (auth()->user()->hasRole('attendee')) {
    //         return view('attendeedash');
    //     } elseif (auth()->user()->hasRole('eventorganizer')) {
    //         return view('eventdash');
    //     } elseif (auth()->user()->hasRole('admin')) {
    //         return view('dashboard');
    //     }
    // }

    public function first() {
        if (auth()->user()->hasRole('attendee')) {
            return view('attendeedash');
        } elseif (auth()->user()->hasRole('eventorganizer')) {
            return view('eventdash');
        } elseif (auth()->user()->hasRole('admin')) {
            return view('dashboard');
        } else {
            dd("No matching role found for user: " . auth()->user()->name);
        }
    }
    
    

}

