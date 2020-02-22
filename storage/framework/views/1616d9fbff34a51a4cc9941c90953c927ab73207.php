<?php $__env->startSection('content'); ?>
    <div class="container" align="center">
        <h1>Add Subadmin</h1>
        <?php if( count($users) > 0): ?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($user->user_id == 0): ?>
                <div class="col-md-12">
                    <hr>
                    <table style="background-color:rgba(0,0,0,0.1)" cellpadding=20 class="table-striped table-hover">
                        <tr align="center">
                            <td style="font-size:20px"><b>Name</b></td>
                            <td style="font-size:18px"><?php echo e($user->name); ?></td>
                        </tr>
                        <tr align="center">
                            <td style="font-size:20px"><b>Email ID</b></td>
                            <td style="font-size:18px"><?php echo e($user->email); ?></td>
                        </tr>
                        <tr align="center">
                            <td style="font-size:20px"><b>User ID</b></td>
                            <td style="font-size:18px"><?php echo e($user->user_id); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <a href="/sacontrol/<?php echo e($user->id); ?>/edit" class="btn btn-dark">Add as Sub-Admin</a>
                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <div class="col-md-12" align="center">
            <a href="/posts" class="btn btn-lg btn-success">Back to Task Page</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>