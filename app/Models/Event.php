<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
=======
>>>>>>> parent of 10a93d1 (Adding changes to the project)
    
    
}
