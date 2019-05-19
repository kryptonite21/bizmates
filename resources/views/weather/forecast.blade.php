@extends('layouts.app')

@section('content')
<br />  

<a href="{{url('/')}}" class="btn btn-default">Back</a>

<h2>{{ $city }}'s 5-day Forecast</h2>
<p>Date: <?php echo date('M d, Y'); ?></p>
<p>Time: <?php echo date('H:i:s'); ?></p>

<div class="row">
@forelse($forecast as $row)

        <div class="col-md-2">
          <div class="thumbnail">
            <div class="caption">
            <p class="pull-right"><small><?php echo $row['hour'] ?></small></p>
            <img src="{{asset('weather')}}/<?php echo $row['icon']; ?>" width="90px">
            <h3><?php echo $row['dt_txt'] ?></h3>
              <p><?php echo $row['main']; ?></p>
              <p><strong><?php echo $row['description'] ?></strong></p>
              <p>Min: <?php echo $row['temp_min'] ?>&deg; C</p>
              <p>Max: <?php echo $row['temp_max'] ?>&deg; C</p>
              <p>Humidity: <?php echo $row['pressure'] ?></p>
            </div>
          </div>
        </div>
@empty
<p>No records found.</p>
@endforelse
</div>
@endsection
