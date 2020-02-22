@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Adding Sub-Admin</h1>
    {!! Form::open(['action' => ['SAController@store',$users->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$users->name,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','Email ID')}}
            {{Form::text('email',$users->email,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('user_id','User ID')}}
            {{Form::text('user_id',$users->user_id,['class'=>'form-control'])}} 
        </div>
        <div class="form-group"> 
            {{Form::label('w_id','Ward ID')}}
            <select class="form-control" name="w_id">
                @if( count($wards) > 0)
                    @foreach($wards as $ward)
                    <option value="{{$ward->ward_id}}">{{$ward->ward_name}}</option>
                    @endforeach
                @else 
                    <option disabled=true>No Wards Found</option>
                @endif
            </select>
        </div>
        
        {{Form::submit('Submit',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
    </div>
    
@endsection