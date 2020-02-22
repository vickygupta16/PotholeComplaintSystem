@extends('layouts.app')

@section('content')
    <div class="container">
        @if( Auth::user()->user_id == 2)
            @include('/fps/ma')
        @elseif( Auth::user()->user_id == 1)
            @include('/fps/sa')
        @else 
            @include('/fps/user')
        @endif
    </div>
@endsection