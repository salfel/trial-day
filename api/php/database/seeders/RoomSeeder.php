<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    private $rooms = [
        'Double Room',
        'Junior Suite',
        'King Suite',
    ];

    public function run(): void
    {
        foreach ($this->rooms as $room) {
            Room::factory()->create([
                'name' => $room,
            ]);
        }
    }
}
