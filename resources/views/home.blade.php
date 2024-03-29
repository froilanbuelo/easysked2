@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Sked Dashboard</h3>
                    <u class="text-undeline">List</u> | <a href="{{url('home/calendar')}}">Calendar</a>
                </div>
                <div class="panel-body">
                    @if (count($events) > 0 )
                        @foreach($events as $event)
                            <h3 class="panel-title"><a href=""><h4 class="text-primary">{{ $event->title}} #{{$event->id}}</h4></a></h3>
                            <div>{{$event->location}}</div>
                            <div class="text-danger">{{$event->start->toDayDateTimeString()}} to {{$event->end->format('h:i A') }}</div>
                            <div>{{$event->end->diffInMinutes($event->start)}} Minutes</div>
                            @foreach($event->invitees as $invitee)
                                <div class="text-default">{{$invitee->display_name}}</div>
                            @endforeach
                        @endforeach
                    @else
                        No Events yet.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
