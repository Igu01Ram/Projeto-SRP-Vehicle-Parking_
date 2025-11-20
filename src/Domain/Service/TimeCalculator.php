<?php

declare (strict_types=1);

interface TimeCalculator
{
    public static function calculateStayLength(string $entryTime, string $exitTime): string;
    public static function calculateParkingFee(string $stayLength, string $vehicleType): float;

}