<?php $__env->startSection('content'); ?>
    <div align="center" class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Solved Complaints</h2>
                <?php $__currentLoopData = $comp1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <hr>
                <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                    <tr align="center">
                        <td style="font-size:20px"><b>Submitted By</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->name); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Number of Potholes</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->nop); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Address</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->address); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Submitted at</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->created_at); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Status</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->comp_status); ?></td>
                    </tr>
                </table>
                <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-md-6">
                <h2>Unsolved Complaints</h2>
                <?php $__currentLoopData = $comp2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <hr>
                <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                    <tr align="center">
                        <td style="font-size:20px"><b>Submitted By</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->name); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Number of Potholes</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->nop); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Address</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->address); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Submitted at</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->created_at); ?></td>
                    </tr>
                    <tr align="center">
                        <td style="font-size:20px"><b>Status</b></td>
                        <td style="font-size:18px"><?php echo e($cmp->comp_status); ?></td>
                    </tr>
                </table>
                <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>