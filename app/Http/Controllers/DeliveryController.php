<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryRequest;
use Illuminate\Support\Facades\Http;

class DeliveryController extends Controller {

    public function sendParcelData(DeliveryRequest $request) {
        $parcel = $request->input('parcel');
        $recipient = $request->input('recipient');

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
