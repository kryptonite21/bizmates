<?php
namespace App\Services;

use App\Weather;

class WeatherService
{
    public function getRequest($data)
    {
        $city_name = $data['name'];
        $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.',PH&APPID=a0c5df1a62c583c73c2f187d32c9f315&units=metric';
        $data = file_get_contents($api_url);
        return $data;
    
    }

    public function parseWeather($data)
    {
        $city = json_decode($data);

        //City array data

        return $city;
    }

    public function parseForecast($data){

    }

}