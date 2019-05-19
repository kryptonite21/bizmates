<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        return view('weather.index');
    }

    public function forecast($id)
    {
        return view('weather.forecast');
    }
}
