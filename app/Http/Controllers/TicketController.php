<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TicketController extends Controller
{
    public function index()
    {
    $tickets = Ticket::with('event')->get();
    return view('tickets.index', compact('tickets'));
    }

    public function create()
    {

        $events = Event::all();
        return view('tickets.create', compact('events'));
    }

   public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to create a ticket');
        }
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'ticket_type' => 'required|string|max:255', 
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'purchase_date' => 'required|date',
            'status' => 'required|string',
        ]);
        $user_id = auth()->user()->id;
        Ticket::create([
            'event_id' => $request->event_id,
            'ticket_type' => $request->ticket_type, 
            'quantity' => $request->quantity,
            'price' => $request->price,
            'purchase_date' => now(),
            'status' => 'available', 'new','sold','reserved',
            'user_id' => $user_id,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully');
    }
    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        $events = Event::all();
        return view('tickets.edit', compact('ticket', 'events'));
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);

        $request->validate([
            'event_id' => 'required|exists:events,id',
            'ticket_type' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'purchase_date' => 'required|date',
            'status' => 'required|string', 
        ]);

        $ticket->update([
            'event_id' => $request->event_id,
            'ticket_type' => $request->ticket_type,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'purchase_date' => $request->purchase_date,
            'status' => $request->status,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully');
    }

    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.show', compact('ticket'));
    }
    public function destroy($id)
    {
        
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
    

        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully');
    }
    
}





     