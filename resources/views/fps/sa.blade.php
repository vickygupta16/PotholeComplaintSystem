@extends('layouts.app')

@section('content')
    <div align="center" class="container">
        <h1>Hello {{ Auth::user()->name}}</h1>
        <hr style="width: 85%;background-color:black;height:5px">
        <br>
        <h2>Choose your task</h2>
        <div class="col-md-12">
            <div class="card" style="height:34rem; width: 18rem;">
                <img class="card-img-top" src="{{URL::to('assets/images/eye_icon.jpeg')}}" alt="View Complaints">
                <hr style="width:90%;background-color:black">
                <div class="card-body">
                    <h4 class="card-title">View Complaints Under My Ward</h4>
                    <p class="card-text">View Complaints and Update Status for each as required.</p>
                    <hr style="width:90%;background-color:black">
                    <a href="/saviews/{{Auth::user()->id}}" class="btn btn-lg btn-outline-success">View</a>
                </div>
            </div>
        </div>
        <br>
        <hr style="width: 85%;background-color:black;height:5px">
    </div>
@endsection