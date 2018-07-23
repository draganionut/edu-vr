@extends('testing.layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">{{$title}}</div>
            <ul>
                @if(count($team) > 0)
                    @foreach($team as $user)
                        <li>{{$user}}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection