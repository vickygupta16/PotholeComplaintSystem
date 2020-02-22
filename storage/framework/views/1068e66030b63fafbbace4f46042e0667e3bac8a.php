<?php $__env->startSection('content'); ?>
    <div class="container" align="center">
        <h1 style="font-family:Calibri;font-size:400%">All Complaints Registered till now!</h1>
        <?php if(count($comp) > 0): ?>
            <div class="well well-lg">
                <div class="row">
                    <?php $__currentLoopData = $comp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12">
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
                                <?php if( Auth::user()->user_id == 2): ?>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <?php echo Form::open(['action'=>['PostsController@destroy',$cmp->id],'method'=>'POST']); ?>

                                                <?php echo e(Form::hidden('_method','DELETE')); ?>

                                                <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                            <hr>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div>
            </div>
        <?php else: ?> 
            <h3 style="font-family: Gill Sans">No Complaints Found</h3>
        <?php endif; ?>
    </div>
    <?php if( Auth::user()->user_id == 2): ?>
        <div class="col-md-12" align="center">
        <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>