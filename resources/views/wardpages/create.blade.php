@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 align="center">Add Ward</h1>
        {!! Form::open(['action' => 'WardController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('wardname','Ward Name')}}
            {{Form::text('wardname','',['class'=>'form-control'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
    </div>

    <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
@endsection