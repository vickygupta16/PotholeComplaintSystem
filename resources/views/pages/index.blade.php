<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="icon" type="image/jpg" href="{{URL::to('/assets/images/pcslogo1.jpg')}}" />
        <link rel="stylesheet" href="{{asset('css/indexcss.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body style="background-image: url('/assets/images/bg13.jpg'); background-attachment: fixed;">
        <div class="container" align="center">
            <br>
            @include('inc.navbar')
            <hr class="hr1">
            <h1 style="font-family: Georgia;font-size:700%;color:cornsilk">Pothole Complaint System</h1>
            <hr class="hr1">
            
        </div>
        <br>
        <div class="container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ URL::to('/assets/images/img1.jpeg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ URL::to('/assets/images/img2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ URL::to('/assets/images/img3.jpg') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br><br>

        
        <div align="center" style="background-color:rgba(0,0,0,0.6);height:300px;">
            <div class="row">
                <div class="col-md-4">
                    <hr style="width: 90%;background-color:yellow;height:.2em">
                    <h3 style="color: blanchedalmond; font-family: Helvetica;">Under Guidance of:</h3>
                    <hr style="background-color: wheat;width:50%">
                    <p style="font-size: 20px;color:deepskyblue"><i class="fas fa-chalkboard-teacher"></i> Mrs Poonam Sindhu</p>
                    <p style="font-size: 20px;color:deepskyblue">&</p>
                    <p style="font-size: 20px;color:deepskyblue"><i class="fas fa-laptop-code"></i> Mr Vijit Ail</p>
                    <hr style="background-color: wheat;width:50%">
                    <hr style="width: 90%;background-color:yellow;height:.2em">
                </div>
                <div class="col-md-4">
                    <hr style="width: 90%;background-color:deepskyblue;height:.2em">
                    <h3 style="color: blanchedalmond; font-family: Helvetica;">Team Members:</h3>
                    <hr style="background-color: khaki;width:50%">
                    <p style="font-size: 20px;color:yellow"><i class="fas fa-user-graduate"></i> Vicky Gupta</p>
                    <p style="font-size: 20px;color:yellow">&</p>
                    <p style="font-size: 20px;color:yellow"><i class="fas fa-user-friends"></i> Tarun Verma</p>
                    <hr style="background-color: khaki;width:50%">
                    <hr style="width: 90%;background-color:deepskyblue;height:.2em">
                </div>
                <div class="col-md-4">
                    <hr style="width: 90%;background-color:yellow;height:.2em">
                    <h3 style="color: blanchedalmond; font-family: Helvetica;">Status:</h3>
                    <hr style="background-color: wheat;width:50%">
                    <p style="font-size: 20px;color:deepskyblue">Under Construction</p>
                    <p style="font-size: 20px;color:deepskyblue">From: <i class="fas fa-business-time"></i> November 2018</p>
                    <p style="font-size: 20px;color:deepskyblue">To: <i class="fas fa-business-time"></i> February 2019</p>
                    <hr style="background-color: wheat;width:50%">
                    <hr style="width: 90%;background-color:yellow;height:.2em">
                </div>
            </div>
        </div>   
   
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
