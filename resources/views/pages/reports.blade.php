@extends('layouts.app')

@section('content')
    <div align="center" class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Solved Complaints</h2>
                @foreach($comp1 as $cmp)
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
                </table>
                <hr>
                @endforeach
            </div>
            <div class="col-md-6">
                <h2>Unsolved Complaints</h2>
                @foreach($comp2 as $cmp)
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
                </table>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection