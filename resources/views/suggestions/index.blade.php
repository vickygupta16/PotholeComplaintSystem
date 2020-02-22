@extends('layouts.app')

@section('content')
    <div class="container" align="center">
        <h1>Feedbacks Submitted till now</h1>
        @if(count($sugs) > 0)
            @foreach($sugs as $sug)
            <hr>
            <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                <tr align="center">
                    <td><b>ID</b></td>
                    <td>{{$sug->id}}</td>
                </tr>
                <tr align="center">
                    <td><b>Name</b></td>
                    <td>{{$sug->name}}</td>
                </tr>
                <tr align="center">
                    <td><b>Feedback</b></td>
                    <td>{{$sug->content}}</td>
                </tr>
                <tr align="center">
                    <td><b>Stars</b></td>
                    <td>{{$sug->stars}}</td>
                </tr>
            </table>
            <hr>
            <br>
            @endforeach
        @else 
            <h3>No Feedbacks yet!</h3>
        @endif
    </div>
    <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
@endsection