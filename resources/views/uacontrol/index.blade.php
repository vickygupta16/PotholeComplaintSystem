@extends('layouts.app')

@section('content')
    <div align="center" class="container">

        @if( count($users) > 0)
            @foreach($users as $user)
                @if($user->user_id == 0)
                <div class="col-md-12">
                    <hr>
                    <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                        <tr align="center">
                            <td style="font-size:20px"><b>Name</b></td>
                            <td style="font-size:18px">{{$user->name}}</td>
                        </tr>
                        <tr align="center">
                            <td style="font-size:20px"><b>Email ID</b></td>
                            <td style="font-size:18px">{{$user->email}}</td>
                        </tr>
                        <tr align="center">
                            <td style="font-size:20px"><b>User ID</b></td>
                            <td style="font-size:18px">{{$user->user_id}}</td>
                        </tr>
                        <tr align="center">
                            <td style="font-size:20px"><b>Created at</b></td>
                            <td style="font-size:18px">{{$user->created_at}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                {!!Form::open(['action'=>['UserController@destroy',$user->id],'method'=>'POST'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-lg btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
                @endif
            @endforeach
        @endif
        <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
        </div>
    </div>
@endsection