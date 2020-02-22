<?php $__env->startSection('content'); ?>
    <div class="container" align="center">
        <h1>Feedbacks Submitted till now</h1>
        <?php if(count($sugs) > 0): ?>
            <?php $__currentLoopData = $sugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <hr>
            <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                <tr align="center">
                    <td><b>ID</b></td>
                    <td><?php echo e($sug->id); ?></td>
                </tr>
                <tr align="center">
                    <td><b>Name</b></td>
                    <td><?php echo e($sug->name); ?></td>
                </tr>
                <tr align="center">
                    <td><b>Feedback</b></td>
                    <td><?php echo e($sug->content); ?></td>
                </tr>
                <tr align="center">
                    <td><b>Stars</b></td>
                    <td><?php echo e($sug->stars); ?></td>
                </tr>
            </table>
            <hr>
            <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?> 
            <h3>No Feedbacks yet!</h3>
        <?php endif; ?>
    </div>
    <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>