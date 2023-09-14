@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Ticket</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tickets.update', $ticket->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="event_id">Event</label>
                            <select class="form-control" id="event_id" name="event_id" required>
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}" {{ $event->id === $ticket->event_id ? 'selected' : '' }}>{{ $event->ename }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ticket_type">Ticket Type</label>
                            <select class="form-control" id="ticket_type" name="ticket_type" required>
                                <option value="Single" {{ $ticket->ticket_type === 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Double" {{ $ticket->ticket_type === 'Double' ? 'selected' : '' }}>Double</option>
                                <option value="Regular" {{ $ticket->ticket_type === 'Regular' ? 'selected' : '' }}>Regular</option>
                                <option value="VIP" {{ $ticket->ticket_type === 'VIP' ? 'selected' : '' }}>VIP</option>
                                <option value="VVIP" {{ $ticket->ticket_type === 'VVIP' ? 'selected' : '' }}>VVIP</option>
                    
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $ticket->quantity }}" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $ticket->price }}" required>
                        </div>

                        <div class="form-group">
                            <label for="purchase_date">Purchase Date</label>
                            <input type="date" class="form-control" id="purchase_date" name="purchase_date" value="{{ $ticket->purchase_date }}" required>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="available" {{ $ticket->status === 'available' ? 'selected' : '' }}>available</option>
                                <option value="sold" {{ $ticket->status === 'sold' ? 'selected' : '' }}>sold</option>
                                <option value="new" {{ $ticket->status === 'new' ? 'selected' : '' }}>new</option>
                                <option value="reserved" {{ $ticket->status === 'reserved' ? 'selected' : '' }}>reserved</option>
                                
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Ticket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



