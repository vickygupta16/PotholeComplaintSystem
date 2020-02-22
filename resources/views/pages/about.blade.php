<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="icon" type="image/jpg" href="{{URL::to('/assets/images/pcslogo1.jpg')}}" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body style="background-image: url('/assets/images/bg13.jpg'); background-attachment: fixed;">
        <div align="center" class="container">  
            <br>
            @include('inc.navbar')  
            <br>
            <h3 align="center" style="color: azure">About <small>page of</small> PCS</h3>
            <br>
            

            <hr style="border-radius: 70px;background-color: lawngreen;height: 10px;">
            <div align="center" class="card" style="width: 50rem;">
                    <div class="card-body">
                        <p><i class="far fa-kiss-wink-heart fa-5x"></i></p>
                      <h5 class="card-title">Hello All!</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Glad to see that you visited us!</h6>
                      <p class="card-text">This PCS Project is our temporary website just to imporve our skills and knowledge about Web Designing.</p>
                      <p class="card-text">Make sure you visit each & every webpage of our project!</p>
                      <h6 align="right" class="card-subtitle mb-2 text-muted">Thanking You</h6>
                      <p><i class="fas fa-grin-stars fa-5x"></i></p>
                    </div>
                  </div>
            <hr style="border-radius: 70px;background-color:lawngreen;height: 10px;">
        </div>
    </body>
</html>