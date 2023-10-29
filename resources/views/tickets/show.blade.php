@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Ticket Details</div>

        <div class="card-body">
            <h5 class="card-title">Ticket Type: {{ $ticket->ticket_type }}</h5>
            <p class="card-text">Event: {{ $ticket->event->ename }}</p>
            <p class="card-text">Quantity: {{ $ticket->quantity }}</p>
            <p class="card-text">Price: ${{ $ticket->price }}</p>
            <p class="card-text">Purchase Date: {{ $ticket->purchase_date }}</p>
            <p class="card-text">Status: {{ $ticket->status }}</p>
            

            <a href="{{ route('tickets.index') }}" class="btn btn-primary">Back to Tickets</a>
        </div>
    </div>
</div>
@endsection