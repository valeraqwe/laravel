<?php
interface CourierService {
    public function sendParcelData(array $parcel, array $recipient): array;
}
