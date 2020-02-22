<?php $__env->startSection('content'); ?>
    <div align="center" class="container">
        <h1>Hello <?php echo e(Auth::user()->name); ?></h1>
        <hr style="width: 85%;background-color:black;height:5px">
        <br>
        <h2>Choose your task</h2>
        <div class="col-md-12">
            <div class="card" style="height:34rem; width: 18rem;">
                <img class="card-img-top" src="<?php echo e(URL::to('assets/images/eye_icon.jpeg')); ?>" alt="View Complaints">
                <hr style="width:90%;background-color:black">
                <div class="card-body">
                    <h4 class="card-title">View Complaints Under My Ward</h4>
                    <p class="card-text">View Complaints and Update Status for each as required.</p>
                    <hr style="width:90%;background-color:black">
                    <?php echo Form::open(['action'=>['SaVC@show',$obj->id],'method'=>'POST']); ?>

                        <?php echo e(Form::submit('View',['class'=>'btn btn-lg btn-danger'])); ?>

                    <?php echo Form::close(); ?>

                    <a href="/saviews/show" class="btn btn-lg btn-outline-success">View</a>
                </div>
            </div>
        </div>
        <br>
        <hr style="width: 85%;background-color:black;height:5px">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>