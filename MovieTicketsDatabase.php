<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class concertTickets extends Model
{
    use HasFactory;
    protected $fillable = [
        "ticketPrice",
        "Moviehall",
        "Movie",
        "startTime",
        
      ];
}
