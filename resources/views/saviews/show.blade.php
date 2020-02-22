@extends('layouts.app')

@section('content')
    <div align="center" class="container">
        <h1>Complaints Under Me</h1>
        <h2></h2>
        @foreach($sql as $sq)
        <div class="col-md-12">
                <hr>
                <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                    <tr align="center">
                        <td style="font-size:20px"><b>Submitted By</b></td>
                        <td style="font-size:18px">{{$sq->name}}</td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Number of Potholes</b></td>
                        <td style="font-size:18px">{{$sq->nop}}</td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Address</b></td>
                        <td style="font-size:18px">{{$sq->address}}</td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Ward Name</b></td>
                        <td style="font-size:18px">{{$sq->wardname}}</td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Submitted at</b></td>
                        <td style="font-size:18px">{{$sq->created_at}}</td>
                    </tr>
                    <tr align="center" style="background-color:bisque">
                        <td style="font-size:20px"><b>Status</b></td>
                        <td style="font-size:18px">{{$sq->comp_status}}</td>
                    </tr>
                    <tr align="center">
                        <td colspan=2><a href="/saviews/{{$sq->id}}/edit" class="btn btn-success">Assign Status</a></td>
                    </tr>
                </table>
                <hr>
            </div>
        @endforeach
    </div>
@endsection