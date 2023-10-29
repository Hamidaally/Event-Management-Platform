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
                           <label for="quantity">Quantity:</label>
                          <input type="text" name="quantity" id="quantity" class="form-control" required>
                        </div>
                       
                        <div class="form-group">
                   <label for="price_per_person">Price</label>
                   <input type="text" name="price_per_person" id="price_per_person" class="form-control" value="{{ old('price_per_person') }}" required>
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
