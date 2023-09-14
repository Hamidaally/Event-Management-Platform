<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Carbon;

class SecondDashboardController extends Controller
{
    //
    public function index(){
        $events = Event::all();


        $totalEvents = Event::count();
        $totalUsers = User::count();

        $todayEvents = Carbon::now()->format('d-m-Y');
        $thisMonthEvents = Carbon::now()->format('m');
        $thisYearEvents = Carbon::now()->format('Y');

        $todayEvents = Event::whereDate('created_at', $todayEvents)->count();
        $thisMonthEvents = Event::whereDate('created_at', $thisMonthEvents)->count();
        $thisYearEvents = Event::whereDate('created_at', $thisYearEvents)->count();

        return view('analytics',compact('totalEvents','totalUsers','todayEvents','thisMonthEvents','thisYearEvents'),['events'=>$events]);
        
    }
}
