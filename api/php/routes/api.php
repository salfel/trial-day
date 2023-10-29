<?php

use App\Http\Controllers\OfferController;
use App\Http\Controllers\OfferRoomController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('offers', OfferController::class);
    Route::apiResource('offers.rooms', OfferRoomController::class)
        ->parameter('rooms', 'offerRoom')
        ->except('show')
        ->shallow();
});
