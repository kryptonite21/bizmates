@extends('layouts.app')

@section('content')
<br />  
<div class="col-md-2 col-sm-8">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-success"></i>
                      <i class="fa fa-building fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Tokyo</h4>
                <p>36 &deg;C</p>
                <p>Cloudy</p>
                <a href="{{ url('forecast/1') }}" class="btn btn-info">Forecast</a>
            </div>
        </div>
</div>

<div class="col-md-2 col-sm-8">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-building fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Yokohama</h4>
                <p>36 &deg;C</p>
                <p>Cloudy</p>
                <a href="{{ url('forecast/2') }}" class="btn btn-info">Forecast</a>
            </div>
        </div>
</div>

<div class="col-md-2 col-sm-8">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-warning"></i>
                      <i class="fa fa-building fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Kyoto</h4>
                <p>36 &deg;C</p>
                <p>Cloudy</p>
                <a href="{{ url('forecast/3') }}" class="btn btn-info">Forecast</a>
            </div>
        </div>
</div>

<div class="col-md-2 col-sm-8">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-building fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Osaka</h4>
                <p>36 &deg;C</p>
                <p>Cloudy</p>
                <a href="{{ url('forecast/4') }}" class="btn btn-info">Forecast</a>
            </div>
        </div>
</div>

<div class="col-md-2 col-sm-8">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-building fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Sapporo</h4>
                <p>36 &deg;C</p>
                <p>Cloudy</p>
                <a href="{{ url('forecast/5') }}" class="btn btn-info">Forecast</a>
            </div>
        </div>
</div>

<div class="col-md-2 col-sm-8">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-danger"></i>
                      <i class="fa fa-building fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Nagoya</h4>
                <p>36 &deg;C</p>
                <p>Cloudy</p>
            <a href="{{ url('forecast/6') }}" class="btn btn-info">Forecast</a>
            </div>
        </div>
</div>


@endsection
