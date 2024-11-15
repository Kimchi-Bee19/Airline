<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'passeger_name',
        'passeger_phone',
        'seat_number',
        'is_boarding',
        'boarding_time'
    ];

    public function flight(): BelongsTo {
        return $this->belongsTo(Flight::class);
    }

}
