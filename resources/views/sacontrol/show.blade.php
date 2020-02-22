@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dismiss SubAdmin</h2>

        @if(count($SubAdmin) > 0)
        <div align="center" class="well">
            <table cellpadding=10 class="table-striped table-hover">
                <tr style="height:80px;font-family:Georgia;font-size:1.5em">
                    <td style="color:midnightblue" align="center"><b>SubAdmin ID</b></td>
                    <td style="color:midnightblue" align="center"><b>Name</b></td>
                    <td style="color:midnightblue" align="center"><b>Email ID</b></td>
                    <td style="color:midnightblue" align="center"><b>Ward ID</b></td>
                </tr>
                @foreach($SubAdmin as $sa)
                <tr style="height:50px;font-family:Lucida Sans">
                    <td style="color:black" align="center">{{$sa->sa_id}}</td>
                    <td style="color:black" align="center">{{$sa->name}}</td>
                    <td style="color:black" align="center">{{$sa->email}}</td>
                    <td style="color:black" align="center">{{$sa->w_id}}</td>
                    <td colspan="2" align="center">
                        {!!Form::open(['action'=>['SAController@destroy',$sa->sa_id],'method'=>'POST'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class'=>'btn btn-lg btn-danger'])}}
                        {!!Form::close()!!}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    @else
        <p>No Sub Admins!</p>
    @endif
    <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
    </div>
@endsection