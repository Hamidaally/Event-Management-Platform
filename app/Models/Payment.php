<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Event;
use App\Models\TicketType;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $primaryKey = "transaction_id";

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Event model
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // Define the relationship with the TicketType model
    public function ticketType()
    {
        return $this->belongsTo(TicketType::class);
    }

}
