@extends('layouts.app')

@section('content')
<br />  

<h2>Current Weather </h2>
<p>Date: <?php echo date('M d, Y'); ?></p>
<p>Time: <?php echo date('H:i:s'); ?></p>
@forelse($weather as $row)
<div class="col-md-2 col-sm-8">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-warning"></i>
                      <i class="fa fa-building fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4><?php echo $row['city_name'].', '.$row['country']; ?></h4>
                <p><?php echo $row['temperature'] ?> &deg;C</p>
                <p><?php echo $row['description'] ?></p>
                <a href="{{ url('forecast/2') }}" class="btn btn-info">Forecast</a>
            </div>
        </div>
</div>
@empty
<p>No records found.</p>
@endforelse

@endsection
