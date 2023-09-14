<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    
    public function review(){
        $events = Event::select('event_id')->get();
        //  dd($events);
        return view('review',['events' => $events]);
    }

   

    public function reviewStore(Request $request){
        // Check if the user is authenticated
        if (Auth::check()) {
            $user_id = Auth::user()->user_id;
            
            $review = new Review();
            $review->event_id = $request->event_id;
            $review->user_id = $user_id; // Use the retrieved user_id
            $review->comments = $request->comment;
            $review->rating = $request->rating;
            $review->save();
    
            // return redirect()->route('review');
            
        } 
       // return redirect()->back();
        return redirect()->route('attendee')->with('toast_message','Your review has been submitted Successfully,');
       // echo 'Review recorded successfully';
    }
    
}
