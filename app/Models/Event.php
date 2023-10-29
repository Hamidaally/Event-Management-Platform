<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
use App\Models\Review;

class Event extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'event_id',
        'ename',
        'description',
        'date',
        'time',
        'location',
        'types',
        'pricing',
        
    ];
    protected $primaryKey = "event_id";
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
=======

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    
>>>>>>> 88f6a61b8bf5a7f691ee02f306206a53222ffe6e
    
}
