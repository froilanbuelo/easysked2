@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Users</h3></div>
                <div class="panel-body">
                    @if (count($users) > 0 )
                        @foreach($users as $user)
                            <a href="{{route('user.show',$user->id)}}"><h4 class="text-primary">{{ $user->name}}</h4></a>
                        @endforeach
                    @else
                        No Users yet.
                    @endif
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
