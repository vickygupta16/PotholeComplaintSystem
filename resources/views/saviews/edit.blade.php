@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Assign Status</h2>
        {!! Form::open(['action' => ['SataskController@update',$comp->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$comp->name,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('nop','Number of Potholes')}}
            {{Form::text('nop',$comp->nop,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('address','Address')}}
            {{Form::textarea('address',$comp->address,['class'=>'form-control','rows'=>2])}}
        </div>
        <div class="form-group">
            {{Form::label('wardname','Ward Name')}}
            {{Form::text('wardname',$comp->wardname,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('stat','Status')}}
            <select class="form-control" name="stat">
                @foreach($st as $s)
                    @if($s->id != 1)
                        <option value="{{$s->content}}">{{$s->content}}</option>
                    @else 
                        <option selected hidden value="{{$s->content}}">{{$s->content}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div align="center">
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-lg btn-warning'])}}
        </div>
    </div>
    <div class="col-md-12" align="right">
        <a href="/saviews/{{Auth::user()->id}}" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
@endsection