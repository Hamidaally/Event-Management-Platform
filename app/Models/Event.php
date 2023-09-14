<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
use App\Models\Review;

class Event extends Model
{
    use HasFactory;
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
    
}
