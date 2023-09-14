@extends('layouts.app')

@section('content')
<div class="center-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Ticket</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tickets.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="event_id">Event</label>
                            <select class="form-control" id="event_id" name="event_id" required>
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->ename }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ticket_type">Ticket Type</label>
                            <select class="form-control" id="ticket_type" name="ticket_type" required>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Regular">Regular</option>
                                <option value="VIP">VIP</option>
                                <option value="VVIP">VVIP</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="purchase_date">Purchase Date</label>
                            <input type="date" class="form-control" id="purchase_date" name="purchase_date" required>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="available">available</option>
                                <option value="sold">sold</option>
                                <option value="new">new</option>
                                <option value="reserved">reserved</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Ticket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






