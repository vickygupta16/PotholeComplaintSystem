<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Welcome</h2>
        <a href="posts/check" class="btn btn-light">GO</a>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>