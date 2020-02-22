@extends('layouts.app')

@section('content')
    <div class="container" align="center">
        <h1>Add Subadmin</h1>
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
                        <tr>
                            <td colspan="2" align="center">
                                <a href="/sacontrol/{{$user->id}}/edit" class="btn btn-dark">Add as Sub-Admin</a>
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