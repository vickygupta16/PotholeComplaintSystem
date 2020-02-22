<?php $__env->startSection('content'); ?>
    <div class="container">
    <h1 style="font-family:Geneva" align="center">COMPLAINTS</h1>
    <hr style="width:100%;height:2px;background-color:black;border-radius:20px">
    <?php if(count($posts) > 0): ?>
        <div align="center" class="well">
            <table cellpadding=10 class="table-striped table-hover">
                <tr style="height:80px;font-family:Georgia;font-size:1.5em">
                    <td style="color:midnightblue" align="center"><b>Submitted By</b></td>
                    <td style="color:midnightblue" align="center"><b>Number of Potholes</b></td>
                    <td style="color:midnightblue" align="center"><b>Address</b></td>
                    <td style="color:midnightblue" align="center"><b>Submitted at</b></td>
                </tr>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="height:50px;font-family:Lucida Sans">
                    <td style="color:black" align="center"><?php echo e($post->name); ?></td>
                    <td style="color:black" align="center"><?php echo e($post->nop); ?></td>
                    <td style="color:black" align="center"><?php echo e($post->address); ?></td>
                    <td style="color:black" align="center"><?php echo e($post->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    <?php else: ?>
        <p>No Complaints Registered</p>
    <?php endif; ?>
    <hr style="width:100%;height:2px;background-color:black;border-radius:20px">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>