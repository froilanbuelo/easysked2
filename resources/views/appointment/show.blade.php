@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{$appointment->user->name}}</h3><h4>{{ $appointment->name}}</h4></div>
                <div class="panel-body">
                    <div>{{$appointment->description}}</div>
                    <div class="pull-right text-danger">{{$appointment->hours}} {{str_plural('hour',$appointment->hours)}} {{$appointment->minutes}} minutes</div>
                    @foreach($appointment->schedules as $schedule)
                        <div></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <?php /*
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <calendar></calendar>
        </div>
    </div>
    */ ?>
</div>
@endsection


