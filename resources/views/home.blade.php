@extends('layouts.app')

@section('content')
<br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header">Welcome!</div>
                    <div align="center" class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h2>Login Successful {{ Auth::user()->name}}</h2>
                        <a href="/posts" class="btn btn-lg btn-outline-success">START</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
