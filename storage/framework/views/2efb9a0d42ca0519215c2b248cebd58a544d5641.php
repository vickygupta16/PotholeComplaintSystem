<?php $__env->startSection('content'); ?>
    <div align="center" class="container">
        <h1>Complaints Under Me</h1>
        <h2></h2>
        <?php $__currentLoopData = $sql; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
                <hr>
                <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                    <tr align="center">
                        <td style="font-size:20px"><b>Submitted By</b></td>
                        <td style="font-size:18px"><?php echo e($sq->name); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Number of Potholes</b></td>
                        <td style="font-size:18px"><?php echo e($sq->nop); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Address</b></td>
                        <td style="font-size:18px"><?php echo e($sq->address); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Ward Name</b></td>
                        <td style="font-size:18px"><?php echo e($sq->wardname); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Submitted at</b></td>
                        <td style="font-size:18px"><?php echo e($sq->created_at); ?></td>
                    </tr>
                    <tr align="center" style="background-color:bisque">
                        <td style="font-size:20px"><b>Status</b></td>
                        <td style="font-size:18px"><?php echo e($sq->comp_status); ?></td>
                    </tr>
                    <tr align="center">
                        <td colspan=2><a href="/saviews/<?php echo e($sq->id); ?>/edit" class="btn btn-success">Assign Status</a></td>
                    </tr>
                </table>
                <hr>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>