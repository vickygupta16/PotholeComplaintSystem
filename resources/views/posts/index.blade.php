@extends('layouts.app')

@section('content')
    <div class="container">
    <h1 style="font-family:Geneva" align="center">COMPLAINTS</h1>
    <hr style="width:100%;height:2px;background-color:black;border-radius:20px">
    @if(count($posts) > 0)
        <div align="center" class="well">
            <table cellpadding=10 class="table-striped table-hover">
                <tr style="height:80px;font-family:Georgia;font-size:1.5em">
                    <td style="color:midnightblue" align="center"><b>Submitted By</b></td>
                    <td style="color:midnightblue" align="center"><b>Number of Potholes</b></td>
                    <td style="color:midnightblue" align="center"><b>Address</b></td>
                    <td style="color:midnightblue" align="center"><b>Submitted at</b></td>
                </tr>
                @foreach($posts as $post)
                <tr style="height:50px;font-family:Lucida Sans">
                    <td style="color:black" align="center">{{$post->name}}</td>
                    <td style="color:black" align="center">{{$post->nop}}</td>
                    <td style="color:black" align="center">{{$post->address}}</td>
                    <td style="color:black" align="center">{{$post->created_at}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    @else
        <p>No Complaints Registered</p>
    @endif
    <hr style="width:100%;height:2px;background-color:black;border-radius:20px">
    </div>
@endsection