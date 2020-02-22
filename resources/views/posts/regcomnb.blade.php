@extends('layouts.app')

@section('content')
    <div align="center" class="container">
        <h3>Registered Complaints Nearby</h3>
        <hr>
        @if(count($sql) > 0)
            @foreach($sql as $cp)
                <div class="wrapper">
                    <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                        <tr align="center">
                            <td>Name:</td>
                            <td>{{$cp->name}}</td>
                        </tr>
                        <tr align="center">
                            <td>Number of Potholes:</td>
                            <td>{{$cp->nop}}</td>
                        </tr>
                        <tr align="center">
                            <td>Address:</td>
                            <td>{{$cp->address}}</td>
                        </tr>
                        <tr align="center">
                            <td>Ward Name:</td>
                            <td>{{$cp->wardname}}</td>
                        </tr>
                        <tr align="center">
                            <td>Status:</td>
                            <td>{{$cp->comp_status}}</td>
                        </tr>
                    </table>
                </div>
                <br>
            @endforeach
        @else 
            <p><b>No Complaints Nearby You</b></p>
        @endif 
    </div>
    <hr>
@endsection