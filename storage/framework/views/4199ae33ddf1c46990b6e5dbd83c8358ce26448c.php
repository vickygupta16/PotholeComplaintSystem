<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e(config('app.name')); ?></title>
        <link rel="icon" type="image/jpg" href="<?php echo e(URL::to('/assets/images/pcslogo1.jpg')); ?>" />
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body style="background-image: url('/assets/images/bg13.jpg'); background-attachment: fixed;">
        <div align="center" class="container">
            <br>
            <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="center">
                <hr style="height:7px;width:100%;background-color:lawngreen;border-radius:20px;">
                <h2 style="color:azure;">We have started our services right from Dombivli, Ghatkopar & Bhandup.</h2>
                <h3 style="color:azure;">As & when we will see our website useful to citizens, our services will be provided in more areas.</h3>
                <hr style="height:7px;width:100%;background-color:lawngreen;border-radius:20px;">
            </div>
            <br>
            <div align="center">
                <hr style="width: 85%;background-color:khaki;height:7px;border-radius:50px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo e(URL::to('assets/images/dombivli.jpg')); ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">DOMBIVLI</h5>
                                <p class="card-text">Citizens of Dombivli always cooperate & hence the result is of less potholes compared to earlier.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo e(URL::to('assets/images/ghatkopar.jpg')); ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">GHATKOPAR</h5>
                                <p class="card-text">Complaint Reports from Ghatkopar East are submitted more than from Ghatkopar West.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo e(URL::to('assets/images/bhandup.jpg')); ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">BHANDUP</h5>
                                <p class="card-text">Complaint Reports from Bhandup are always poor resulting in increasing number of potholes yearly!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="width: 85%;background-color:khaki;height:7px;border-radius:50px;">
            </div>
        </div> 

        <br><br><br>

        <div align="center" style="background-color:rgba(0,0,0,0.6);height:300px;">
            <div class="row">
                <div class="col-md-6">
                    <hr style="width: 90%;background-color:yellow;height:.2em">
                    <h3 style="color: blanchedalmond; font-family: Helvetica;">For more Details</h3>
                    <h3 style="color: blanchedalmond; font-family: Helvetica;">Contact us at:</h3>
                    <hr style="background-color: wheat;width:50%">
                    <p style="font-size: 20px;color:deepskyblue">Vicky : <i class="fas fa-mobile-alt"></i> +91 8879835947</p>
                    <p style="font-size: 20px;color:deepskyblue">Tarun : <i class="fas fa-mobile-alt"></i> +91 7977120113</p>
                    <hr style="background-color: wheat;width:50%">
                    <hr style="width: 90%;background-color:yellow;height:.2em">
                </div>
                <div class="col-md-6">
                    <hr style="width: 90%;background-color:yellow;height:.2em">
                    <h3 style="color: blanchedalmond; font-family: Helvetica;">For other Queries</h3>
                    <h3 style="color: blanchedalmond; font-family: Helvetica;">Email us at:</h3>
                    <hr style="background-color: wheat;width:50%">
                    <p style="font-size: 20px;color:deepskyblue">Vicky : <i class="far fa-envelope"></i> vickygupta16599@gmail.com</p>
                    <p style="font-size: 20px;color:deepskyblue">Tarun : <i class="far fa-envelope"></i> tarunjaikar23@gmail.com</p>
                    <hr style="background-color: wheat;width:50%">
                    <hr style="width: 90%;background-color:yellow;height:.2em">
                </div>
            </div>
        </div>
    </body>
</html>