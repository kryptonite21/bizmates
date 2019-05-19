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

    public function getRequestForecast($city_id)
    {
        $weatherInfo = [];
        $appId = 'a0c5df1a62c583c73c2f187d32c9f315';
        $units = 'units=metric';


        switch($city_id){
            case 0:
                $city_name = 'Tokyo';
            break;

            case 1:
                $city_name = 'Yokohama';
            break;
            
            case 2:
                $city_name = 'Kyoto';
            break;

            case 3:
                $city_name = 'Osaka';
            break;

            case 4:
                $city_name = 'Sapporo';
            break;

            case 5:
                $city_name = 'Nagoya';
            break;

            default:
                $city_name = 'Tokyo';
        }


        $api_url = 'http://api.openweathermap.org/data/2.5/forecast?q='.$city_name.',JP&APPID='.$appId.'&'.$units;
        $weatherInfo = json_decode(file_get_contents($api_url));
        return $this->parseForecast($weatherInfo);
    }

    public function parseForecast($forecastArray){
        foreach($forecastArray->list as $row){

            $forecastInfo['dt_txt'] = $row->dt_txt;
            $forecastInfo['main'] = $row->weather[0]->main;
            $forecastInfo['description'] = $row->weather[0]->description;
            $forecastInfo['temp'] = $row->main->temp;
            $forecastInfo['temp_min'] = $row->main->temp_min;
            $forecastInfo['temp_max'] = $row->main->temp_max;
            $forecastInfo['pressure'] = $row->main->pressure;
            $forecastInfo['humidity'] = $row->main->humidity;
            

            $formattedContainer[] = $forecastInfo;
        }

        return $formattedContainer;
    }

}