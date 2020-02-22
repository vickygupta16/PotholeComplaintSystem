<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 align="center">Add Ward</h1>
        <?php echo Form::open(['action' => 'WardController@store','method'=>'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('wardname','Ward Name')); ?>

            <?php echo e(Form::text('wardname','',['class'=>'form-control'])); ?>

        </div>
        <?php echo e(Form::submit('Submit',['class'=>'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

    </div>

    <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>