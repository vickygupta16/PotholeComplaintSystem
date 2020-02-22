@extends('layouts.app')

@section('content')
    <div class="container" align="center">
        <h1 style="font-family:Calibri;font-size:400%">All Complaints Registered till now!</h1>
        @if(count($comp) > 0)
            <div class="well well-lg">
                <div class="row">
                    @foreach($comp as $cmp)
                        <div class="col-md-12">
                            <hr>
                            <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                                <tr align="center">
                                    <td style="font-size:20px"><b>Submitted By</b></td>
                                    <td style="font-size:18px">{{$cmp->name}}</td>
                                </tr>
                                <tr align="center">
                                    <td style="font-size:20px"><b>Number of Potholes</b></td>
                                    <td style="font-size:18px">{{$cmp->nop}}</td>
                                </tr>
                                <tr align="center">
                                    <td style="font-size:20px"><b>Address</b></td>
                                    <td style="font-size:18px">{{$cmp->address}}</td>
                                </tr>
                                <tr align="center">
                                    <td style="font-size:20px"><b>Submitted at</b></td>
                                    <td style="font-size:18px">{{$cmp->created_at}}</td>
                                </tr>
                                <tr align="center">
                                    <td style="font-size:20px"><b>Status</b></td>
                                    <td style="font-size:18px">{{$cmp->comp_status}}</td>
                                </tr>
                                @if( Auth::user()->user_id == 2)
                                    <tr>
                                        <td colspan="2" align="center">
                                            {!!Form::open(['action'=>['PostsController@destroy',$cmp->id],'method'=>'POST'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endif
                            </table>
                            <hr>
                        </div>
                    @endforeach
                <div>
            </div>
        @else 
            <h3 style="font-family: Gill Sans">No Complaints Found</h3>
        @endif
    </div>
    @if( Auth::user()->user_id == 2)
        <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
        </div>
    @endif
@endsection