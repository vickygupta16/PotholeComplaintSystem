<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
@extends('layouts.app')

@section('content')
    <div align="center" class="container">
        <hr>
        <h1>Submit a Suggestion</h1>
        <hr style="width:70%">
        <h2>Fill the "FeedBack" blank with a short review of how your working experience was with us!</h2>
        <hr style="width:70%">
        <hr style="width:80%">
        {!! Form::open(['action' => 'SuggestionController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name',Auth::user()->name,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('content','FeedBack')}}
                {{Form::textarea('content','',['class'=>'form-control','rows'=>2])}}
            </div>
            <div class="form-group">
                {{Form::label('stars','How much STAR/S would you like to give us?')}}
                <br>
                <input type="radio" name="stars" value="1"> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"><i class="far fa-star"></i><i class="far fa-star"></i></i><br>
                <input type="radio" name="stars" value="2"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><br>
                <input type="radio" name="stars" value="3"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><br>
                <input type="radio" name="stars" value="4"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><br>
                <input type="radio" name="stars" value="5"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-lg btn-success'])}}
        {!! Form::close() !!}
        <hr style="width:80%">
    </div>
@endsection