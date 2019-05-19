<?php
namespace App\Services;

use App\Weather;

/**
 * Weather Service
 */
class WeatherService
{
    /**
     * Get request
     *
     * @param [type] $cities
     * @return void
     */
    public function getRequest($cities)
    {
        $weatherInfo = [];
        $appId = 'a0c5df1a62c583c73c2f187d32c9f315';
        $units = 'metric';

        foreach($cities as $city){
            $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&APPID='.$appId.'&units='.$units;
            $weatherInfo[] = json_decode(file_get_contents($api_url));
        }
        return $this->parseWeather($weatherInfo);
    }

    /**
     * Parse weather
     *
     * @param [type] $weatherInfo
     * @return void
     */
    public function parseWeather($weatherInfo)
    {
        $formattedWeather = [];
        $formattedContainer = [];
        foreach($weatherInfo as $weather){
            $formattedWeather['city_name'] = $weather->name;
            $formattedWeather['country'] = $weather->sys->country;
            $formattedWeather['temperature'] = $weather->main->temp;
            $formattedWeather['description'] = $weather->weather[0]->description;
            $formattedWeather['icon'] = $weather->weather[0]->icon.'.png';
            $formattedContainer[] = $formattedWeather;
        }
        return $formattedContainer;
    }

    /**
     * Get Request Forecast
     *
     * @param [type] $city_name
     * @return void
     */
    public function getRequestForecast($city_name)
    {
        $weatherInfo = [];
        $appId = 'daf02c61391f9f612411ad0bd83240ed';
        $units = 'metric';
        $days = 5;

        $api_url = 'http://api.openweathermap.org/data/2.5/forecast/daily?q='.$city_name.'&APPID='.$appId.'&units='.$units.'&cnt='.$days;
        $weatherInfo = json_decode(file_get_contents($api_url));
        return $this->parseForecast($weatherInfo);
    }

    /**
     * Parse Forecast
     *
     * @param [type] $forecastArray
     * @return void
     */
    public function parseForecast($forecastArray){
        foreach($forecastArray->list as $row){

            $forecastInfo['dt_txt'] = date('D', $row->dt);
            $forecastInfo['hour'] = date('H:i', $row->dt);
            $forecastInfo['main'] = $row->weather[0]->main;
            $forecastInfo['description'] = $row->weather[0]->description;
            $forecastInfo['icon'] = $row->weather[0]->icon.'.png';

            $forecastInfo['temp_min'] = $row->temp->min;
            $forecastInfo['temp_max'] = $row->temp->max;
            $forecastInfo['pressure'] = $row->pressure;
            $forecastInfo['humidity'] = $row->humidity;
            
            $formattedContainer[] = $forecastInfo;
        }
        return $formattedContainer;
    }

}