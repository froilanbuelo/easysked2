@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{$user->name}}</h3></div>
                <div class="panel-body">
                    @if (count($appointments) > 0 )
                        @foreach($appointments as $appointment)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a href="{{route('appointment.show',$appointment->id)}}"><h4 class="text-primary">{{ $appointment->name}}</h4></a></h3>
                            </div>
                            <div class="panel-body">
                                <div>{{$appointment->description}}</div>
                                <div class="pull-right text-danger">{{$appointment->hours}} {{str_plural('hour',$appointment->hours)}} {{$appointment->minutes}} minutes</div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        No Appointment yet. Create a New Appointment.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
