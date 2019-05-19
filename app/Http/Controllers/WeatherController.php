<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

/**
 * Undocumented class
 */
class WeatherController extends Controller
{

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $weatherService;

    /**
     * Undocumented function
     *
     * @param WeatherService $service
     */
    public function __construct(WeatherService $service){
        $this->weatherService = $service;
    }

    /**
     * Undocumented function
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
     * Undocumented function
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
