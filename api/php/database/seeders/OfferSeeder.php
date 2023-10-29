<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\OfferRoom;
use App\Models\Room;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = Room::all();

        for ($i = 0; $i < 10; $i++) {
            $offer = Offer::factory()->create([
                'author_id' => 1,
            ]);

            $first = $rooms->random()->id;
            OfferRoom::create([
                'room_id' => $first,
                'offer_id' => $offer->id,
                'price' => rand(100, 1000),
            ]);

            $second = $first;
            while ($second === $first) {
                $second = $rooms->random()->id;
            }

            OfferRoom::create([
                'room_id' => $second,
                'offer_id' => $offer->id,
                'price' => rand(100, 1000),
            ]);
        }
    }
}
