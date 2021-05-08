<?php

namespace Janpun\FlightIataCode;

class Airport
{
    public function __construct()
    {

    }

    public function getNationalInfo($code)
    {
        $file = base_path('vendor/janpun/flight-iata-code/src/airport_national.json');
        $json_string = file_get_contents($file);
        $data = json_decode($json_string, true);
        $i = 0;
        while($i < count($data))
        {
            if($data[$i]['code'] === $code){
                return $data[$i];
            }
            $i++;
        }

        return array();
    }

    public function getInternationalInfo($code)
    {
        $file = base_path('vendor/janpun/flight-iata-code/src/airport_international.json');
        $json_string = file_get_contents($file);
        $data = json_decode($json_string, true);
        $i = 0;
        while($i < count($data))
        {
            if($data[$i]['code'] === $code){
                return $data[$i];
            }
            $i++;
        }

        return array();
    }
}
