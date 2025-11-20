<?php 

declare (strict_types=1);

namespace App\Contracts;

interface VehicleRepository
{
    /**
     * @param array(entery:string,exit:string,type:string) $vehicleData
     * @return void;
     */

    public function calculateStayLength(float $entryTime, float $exitTime): string;
    public static function setVehicleType():string;
}