@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Create & Submit a Complaint</h1>
    {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',Auth::user()->name,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('nop','Number of Potholes')}}
            {{Form::text('nop','',['class'=>'form-control','placeholder'=>'Eg : 4'])}}
        </div>
        <div class="form-group">
            {{Form::label('address','Address')}}
            {{Form::textarea('address','',['class'=>'form-control','placeholder'=>'Eg : Area name, Road name, Locality.','rows'=>2])}}
        </div>
        
        <div class="form-group">
            {{Form::label('wardname','Ward Name')}}
            <select class="form-control" name="wardname">
                <option selected hidden>Eg : Kurla</option>
                @foreach($wards as $ward)
                    <option value="{{$ward->ward_name}}">{{$ward->ward_name}}</option>
                @endforeach
                <!--<option selected="selected" value="Ghatkopar">Ghatkopar</option>
                <option value="Bhandup">Bhandup</option>
                <option value="Dombivli">Dombivli</option>-->
            </select>
        </div>
    
            {{Form::submit('Submit',['class'=>'btn btn-danger'])}}
        
    {!! Form::close() !!}
    </div>
@endsection