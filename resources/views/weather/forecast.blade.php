@extends('layouts.app')

@section('content')
<br />  
<a href="{{url('/')}}" class="btn btn-default">Back</a>
<h2>Forecast</h2>
<div class="row">
@forelse($forecast as $row)

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="caption">
            <img src="{{asset('logo/weather_logo.png')}}" width="100px">
            <h3><?php echo $row['main'] ?></h3>
              <p>Date: <?php echo date('M d, Y H:i:s', strtotime($row['dt_txt'])) ?></p>
              <p>Description: <?php echo $row['description'] ?></p>
              <p>Temperature: <?php echo $row['temp'] ?></p>
              <p>Min: <?php echo $row['temp_min'] ?></p>
              <p>Max: <?php echo $row['temp_max'] ?></p>
              <p>Humidity: <?php echo $row['pressure'] ?></p>
            </div>
          </div>
        </div>
@empty
<p>No records found.</p>
@endforelse
</div>
@endsection
