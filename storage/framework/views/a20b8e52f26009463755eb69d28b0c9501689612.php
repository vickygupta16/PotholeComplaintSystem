<?php $__env->startSection('content'); ?>
    <div align="Center" class="container">
        <h1>All Complaints Under <?php echo e(Auth::user()->name); ?></h1>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>