<?php 

declare (strict_types=1);

namespace App\Contracts;

 class Car implements CarRepository
{
    public static function setVehicleType(): string
    {
        return 'car';
    }

    public function calculateStayLength(string $entryTime, string $exitTime): string
    {
        $entry = new \DateTime($entryTime);
        $exit = new \DateTime($exitTime);
        $interval = $entry->diff($exit);
        return $interval->format('%h:%i:%s');
    }

    public function calculateParkingFee(string $stayLength, string $vehicleType): float
    {
        $timeParts = explode(':', $stayLength);
        $hours = (int)$timeParts[0];
        $ratePerHour = 5.0;
        return $hours * $ratePerHour;
    }

}