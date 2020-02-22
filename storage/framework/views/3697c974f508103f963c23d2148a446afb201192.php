<?php $__env->startSection('content'); ?>
    <div class="container">
    <h1>Adding Sub-Admin</h1>
    <?php echo Form::open(['action' => ['SAController@store',$users->id],'method'=>'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name','Name')); ?>

            <?php echo e(Form::text('name',$users->name,['class'=>'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('email','Email ID')); ?>

            <?php echo e(Form::text('email',$users->email,['class'=>'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('user_id','User ID')); ?>

            <?php echo e(Form::text('user_id',$users->user_id,['class'=>'form-control'])); ?> 
        </div>
        <div class="form-group"> 
            <?php echo e(Form::label('w_id','Ward ID')); ?>

            <select class="form-control" name="w_id">
                <?php if( count($wards) > 0): ?>
                    <?php $__currentLoopData = $wards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($ward->ward_id); ?>"><?php echo e($ward->ward_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?> 
                    <option disabled=true>No Wards Found</option>
                <?php endif; ?>
            </select>
        </div>
        
        <?php echo e(Form::submit('Submit',['class'=>'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>