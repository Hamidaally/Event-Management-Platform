
@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="text-center">Tickets</h2>
<div class="d-flex justify-content-end">
<a class="btn btn-primary  " href="{{ route('tickets.create')}}"  role="button">Add New Ticket</a>
</div>
<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Event</th>
                <th>Ticket Type</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->event->ename }}</td>
                    <td>{{ $ticket->ticket_type }}</td>
                    <td>{{ $ticket->quantity }}</td>
                    <td>${{ $ticket->price }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td>
                    <a href="{{ route('tickets.show', $ticket->id) }}" style="display: inline-block;" class="btn btn-sm btn-primary">View</a>
                   <a href="{{ route('tickets.edit', $ticket->id) }}" style="display: inline-block;" class="btn btn-sm btn-success">Edit</a>
           <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display: inline-block;">
             @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this ticket?')">Delete</button>
         </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection




