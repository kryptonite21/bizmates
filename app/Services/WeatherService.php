<?php
namespace App\Services;

use App\Weather;

class WeatherService
{
    public function getRequest($cities)
    {
        $weatherInfo = [];
        $appId = 'a0c5df1a62c583c73c2f187d32c9f315';
        $units = 'units=metric';

        foreach($cities as $city){
            $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.',JP&APPID='.$appId.'&'.$units;
            $weatherInfo[] = json_decode(file_get_contents($api_url));
        }




        return $this->parseWeather($weatherInfo);
    
    }

    public function parseWeather($weatherInfo)
    {

        $formattedWeather = [];
        $formattedContainer = [];
        foreach($weatherInfo as $weather){
            $formattedWeather['city_name'] = $weather->name;
            $formattedWeather['country'] = $weather->sys->country;
            $formattedWeather['temperature'] = $weather->main->temp;
            $formattedWeather['description'] = $weather->weather[0]->description;
            $formattedContainer[] = $formattedWeather;
        }

        return $formattedContainer;
    }

    public function parseForecast($data){

    }

}