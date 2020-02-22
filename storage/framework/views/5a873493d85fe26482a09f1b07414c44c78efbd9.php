<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Dismiss SubAdmin</h2>

        <?php if(count($SubAdmin) > 0): ?>
        <div align="center" class="well">
            <table cellpadding=10 class="table-striped table-hover">
                <tr style="height:80px;font-family:Georgia;font-size:1.5em">
                    <td style="color:midnightblue" align="center"><b>SubAdmin ID</b></td>
                    <td style="color:midnightblue" align="center"><b>Name</b></td>
                    <td style="color:midnightblue" align="center"><b>Email ID</b></td>
                    <td style="color:midnightblue" align="center"><b>Ward ID</b></td>
                </tr>
                <?php $__currentLoopData = $SubAdmin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="height:50px;font-family:Lucida Sans">
                    <td style="color:black" align="center"><?php echo e($sa->sa_id); ?></td>
                    <td style="color:black" align="center"><?php echo e($sa->name); ?></td>
                    <td style="color:black" align="center"><?php echo e($sa->email); ?></td>
                    <td style="color:black" align="center"><?php echo e($sa->w_id); ?></td>
                    <td colspan="2" align="center">
                        <?php echo Form::open(['action'=>['SAController@destroy',$sa->sa_id],'method'=>'POST']); ?>

                            <?php echo e(Form::hidden('_method','DELETE')); ?>

                            <?php echo e(Form::submit('Delete',['class'=>'btn btn-lg btn-danger'])); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    <?php else: ?>
        <p>No Sub Admins!</p>
    <?php endif; ?>
    <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>