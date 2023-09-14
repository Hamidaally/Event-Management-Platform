<?php 

namespace App\Http\Controllers;
//error_reporting(0); 
use Illuminate\Http\Request;
use App\Models\Event;

class SearchController extends Controller
{
    //
public function search(Request $request){
$text = $request['query'] ?? " ";
if($text != " "){
    $events = Event::where('ename','LIKE','%'.$text.'%')->get();
    return view('search',compact('events','text'));
}
//return view('analytics');
    }
}
