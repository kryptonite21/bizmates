<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

/**
 * Weather Controller
 */
class WeatherController extends Controller
{

    /**
     * Weather service dependency
     *
     * @var [type]
     */
    private $weatherService;

    /**
     * Constructor
     *
     * @param WeatherService $service
     */
    public function __construct(WeatherService $service){
        $this->weatherService = $service;
    }

    /**
     * Index page
     *
     * @return void
     */
    public function index()
    {
        /**
         * City List
         */
        $cityArray = ['Tokyo', 'Yokohama', 'Kyoto', 'Osaka', 'Sapporo', 'Nagoya'];

        $weather = $this->weatherService->getRequest($cityArray);
        return view('weather.index', compact('weather'));
    }

    /**
     * Forecast page
     *
     * @param [type] $id
     * @return void
     */
    public function forecast($cityName)
    {
        $forecast = $this->weatherService->getRequestForecast($cityName);
        return view('weather.forecast', compact('forecast'))->with('city', $cityName);
    }
}
