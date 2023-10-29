<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OfferRoom extends Model
{
    protected $table = 'offer_room';

    protected $fillable = [
        'offer_id',
        'room_id',
        'price',
    ];

    public function offer(): BelongsTo
    {
        return $this->BelongsTo(Offer::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
