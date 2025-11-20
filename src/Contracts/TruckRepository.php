<?php 

declare (strict_types=1);

namespace App\Contracts;

interface TruckRepository
{
    /**
     * @param array(entery:string,exit:string,type:string) $truckData
     * @return void;
     */

    public function calculateStayLength(float $entryTime, float $exitTime): string;
    public static function setVehicleType():string;
    public function calculateParkingFee(float $stayLength, string $vehicleType): float;

}