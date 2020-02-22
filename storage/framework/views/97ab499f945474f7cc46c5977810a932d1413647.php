<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 align="center">Delete Ward</h1>

        <?php if( count($wc) > 0 ): ?>
            <?php $__currentLoopData = $wc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div align="center" class="col-md-12">
                    <hr>
                    <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                        <tr>
                            <td>Ward ID:</td>
                            <td><?php echo e($w->ward_id); ?></td>
                        </tr>
                        <tr>
                            <td>Ward Name:</td>
                            <td><?php echo e($w->ward_name); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <?php echo Form::open(['action'=>['WardController@destroy',$w->ward_id],'method'=>'POST']); ?>

                                    <?php echo e(Form::hidden('_method','DELETE')); ?>

                                    <?php echo e(Form::submit('Delete',['class'=>'btn btn-lg btn-danger'])); ?>

                                <?php echo Form::close(); ?>

                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>