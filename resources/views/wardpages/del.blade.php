@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 align="center">Delete Ward</h1>

        @if( count($wc) > 0 )
            @foreach($wc as $w)
                <div align="center" class="col-md-12">
                    <hr>
                    <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                        <tr>
                            <td>Ward ID:</td>
                            <td>{{$w->ward_id}}</td>
                        </tr>
                        <tr>
                            <td>Ward Name:</td>
                            <td>{{$w->ward_name}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                {!!Form::open(['action'=>['WardController@destroy',$w->ward_id],'method'=>'POST'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-lg btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
            @endforeach
        @endif
    </div>
    <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
@endsection