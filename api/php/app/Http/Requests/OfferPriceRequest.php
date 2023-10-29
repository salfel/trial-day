<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferPriceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'room_id' => ['required', 'integer'],
            'price' => ['required', 'integer'],
        ];
    }
}
