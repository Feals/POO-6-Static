<?php

class Speedometer 
{

    public const DISTANCE_CONVERSION = 0.621371;

    public static function concertKmToMiles($distance) {

        return $distance*self::DISTANCE_CONVERSION;

    }

    public static function convertMilesToKm($distance)
{
        return $distance/self::DISTANCE_CONVERSION;
}
}
