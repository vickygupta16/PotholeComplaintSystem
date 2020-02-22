<?php $__env->startSection('content'); ?>
    <div align="center" class="container">
        <h3>Registered Complaints Nearby</h3>
        <hr>
        <?php if(count($sql) > 0): ?>
            <?php $__currentLoopData = $sql; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="wrapper">
                    <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                        <tr align="center">
                            <td>Name:</td>
                            <td><?php echo e($cp->name); ?></td>
                        </tr>
                        <tr align="center">
                            <td>Number of Potholes:</td>
                            <td><?php echo e($cp->nop); ?></td>
                        </tr>
                        <tr align="center">
                            <td>Address:</td>
                            <td><?php echo e($cp->address); ?></td>
                        </tr>
                        <tr align="center">
                            <td>Ward Name:</td>
                            <td><?php echo e($cp->wardname); ?></td>
                        </tr>
                        <tr align="center">
                            <td>Status:</td>
                            <td><?php echo e($cp->comp_status); ?></td>
                        </tr>
                    </table>
                </div>
                <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?> 
            <p><b>No Complaints Nearby You</b></p>
        <?php endif; ?> 
    </div>
    <hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>