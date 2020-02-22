<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if( Auth::user()->user_id == 2): ?>
            <?php echo $__env->make('/fps/ma', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php elseif( Auth::user()->user_id == 1): ?>
            <?php echo $__env->make('/fps/sa', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php else: ?> 
            <?php echo $__env->make('/fps/user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>