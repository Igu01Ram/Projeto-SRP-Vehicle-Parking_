<?php 

declare (strict_types=1);

namespace App\Contracts;

final class Car implements VehicleRepository
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
}
