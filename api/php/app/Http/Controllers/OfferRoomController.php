<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferPriceRequest;
use App\Http\Resources\OfferResource;
use App\Http\Resources\RoomResource;
use App\Models\Offer;
use App\Models\OfferRoom;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class OfferRoomController extends Controller
{
    public function index(Offer $offer): OfferResource
    {
        Gate::authorize('isOfferAuthor', $offer);

        $offer->load(['rooms' => function (BelongsToMany $query) {
            $query->withPivot('price');
        }]);

        return new OfferResource($offer);
    }

    public function store(OfferPriceRequest $request, Offer $offer): RoomResource
    {
        Gate::authorize('isOfferAuthor', $offer);

        $offerRoom = OfferRoom::create([
            'offer_id' => $offer->id,
            ...$request->validated(),
        ]);

        $room = $offerRoom->offer->rooms()
            ->where('rooms.id', $offerRoom->room_id)
            ->withPivot('price')
            ->first();

        return new RoomResource($room);
    }

    public function update(Request $request, OfferRoom $offerRoom): RoomResource
    {
        Gate::authorize('isOfferAuthor', $offerRoom->offer);

        $validated = $request->validate([
            'price' => 'integer',
            'room_id' => 'integer',
        ]);

        $offerRoom->update($validated);

        $room = $offerRoom->offer->rooms()
            ->where('rooms.id', $offerRoom->room_id)
            ->withPivot('price')
            ->first();

        return new RoomResource($room);
    }

    public function destroy(OfferRoom $offerRoom)
    {
        Gate::authorize('isOfferAuthor', $offerRoom->offer);

        $room = $offerRoom->room;
        $offerRoom->delete();

        $room->load('offers');

        return new RoomResource($room);
    }
}
