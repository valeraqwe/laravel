<?php

namespace App\Services;

use CourierService;
use Illuminate\Support\Facades\Http;

class NovaPoshtaService implements CourierService
{
    public function sendParcelData(array $parcel, array $recipient): array
    {
        $data = [
            'customer_name' => $recipient['name'],
            'phone_number' => $recipient['phone'],
            'email' => $recipient['email'],
            'sender_address' => config('app.sender_address'),
            'delivery_address' => $recipient['address']
        ];

        $response = Http::post('novaposhta.test/api/delivery', $data);

        return $response->json();
    }
}
