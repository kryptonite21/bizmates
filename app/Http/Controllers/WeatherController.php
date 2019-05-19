<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

class WeatherController extends Controller
{

    private $weatherService;

    public function __construct(WeatherService $service){
        $this->weatherService = $service;
    }

    public function index()
    {
        $cityArray = ['Tokyo', 'Yokohama', 'Kyoto', 'Osaka', 'Sapporo', 'Nagoya'];

        $weather = $this->weatherService->getRequest($cityArray);
        return view('weather.index', compact('weather'));
    }

    public function forecast($id)
    {
        $forecast = $this->weatherService->getRequestForecast($id);
        return view('weather.forecast', compact('forecast'));
    }
}
