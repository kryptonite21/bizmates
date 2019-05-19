@extends('layouts.app')

@section('content')
<br />  

<h2>Current Weather</h2>
<p>Date: <?php echo date('M d, Y'); ?></p>
<p>Time: <?php echo date('H:i:s'); ?></p>

@forelse($weather as $row)
<div class="col-md-4">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <img src="{{asset('weather')}}/<?php echo $row['icon']?>" width="100px">
            </div>
            <div class="panel-body">
                <h4><?php echo $row['city_name'].', '.$row['country']; ?></h4>
                <p><?php echo $row['temperature'] ?> &deg;C</p>
                <p><?php echo $row['description'] ?></p>
                <a href="{{ url('forecast') }}/<?php echo $row['city_name']; ?>" class="btn btn-primary">Forecast</a>
            </div>
        </div>
</div>
@empty
<p>No records found.</p>
@endforelse

@endsection
