<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Offer::class);

        return OfferResource::collection(Offer::all());
    }

    public function store(OfferRequest $request)
    {
        $this->authorize('create', Offer::class);

        $credentials = [
            'author_id' => auth()->id(),
            ...$request->validated(),
        ];

        $offer = Offer::create($credentials);

        return new OfferResource($offer);
    }

    public function show(Offer $offer)
    {
        $this->authorize('view', $offer);

        return new OfferResource($offer);
    }

    public function update(Request $request, Offer $offer)
    {
        $this->authorize('update', $offer);

        $validated = $request->validate([
            'name' => 'string',
            'start_date' => 'date',
            'end_date' => 'date',
        ]);

        $offer->update($validated);

        return new OfferResource($offer);
    }

    public function destroy(Offer $offer)
    {
        $this->authorize('delete', $offer);

        $offer->delete();

        return response()->json([
            'offer' => $offer,
        ]);
    }
}
