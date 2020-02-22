<?php $__env->startSection('content'); ?>
    <div class="container">
    <h1>Create & Submit a Complaint</h1>
    <?php echo Form::open(['action' => 'PostsController@store','method'=>'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name','Name')); ?>

            <?php echo e(Form::text('name',Auth::user()->name,['class'=>'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('nop','Number of Potholes')); ?>

            <?php echo e(Form::text('nop','',['class'=>'form-control','placeholder'=>'Eg : 4'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('address','Address')); ?>

            <?php echo e(Form::textarea('address','',['class'=>'form-control','placeholder'=>'Eg : Area name, Road name, Locality.','rows'=>2])); ?>

        </div>
        
        <div class="form-group">
            <?php echo e(Form::label('wardname','Ward Name')); ?>

            <select class="form-control" name="wardname">
                <option selected hidden>Eg : Kurla</option>
                <?php $__currentLoopData = $wards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($ward->ward_name); ?>"><?php echo e($ward->ward_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--<option selected="selected" value="Ghatkopar">Ghatkopar</option>
                <option value="Bhandup">Bhandup</option>
                <option value="Dombivli">Dombivli</option>-->
            </select>
        </div>
    
            <?php echo e(Form::submit('Submit',['class'=>'btn btn-danger'])); ?>

        
    <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>