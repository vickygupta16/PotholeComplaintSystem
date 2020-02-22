<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Assign Status</h2>
        <?php echo Form::open(['action' => ['SataskController@update',$comp->id],'method'=>'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name','Name')); ?>

            <?php echo e(Form::text('name',$comp->name,['class'=>'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('nop','Number of Potholes')); ?>

            <?php echo e(Form::text('nop',$comp->nop,['class'=>'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('address','Address')); ?>

            <?php echo e(Form::textarea('address',$comp->address,['class'=>'form-control','rows'=>2])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('wardname','Ward Name')); ?>

            <?php echo e(Form::text('wardname',$comp->wardname,['class'=>'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('stat','Status')); ?>

            <select class="form-control" name="stat">
                <?php $__currentLoopData = $st; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($s->id != 1): ?>
                        <option value="<?php echo e($s->content); ?>"><?php echo e($s->content); ?></option>
                    <?php else: ?> 
                        <option selected hidden value="<?php echo e($s->content); ?>"><?php echo e($s->content); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div align="center">
            <?php echo e(Form::hidden('_method','PUT')); ?>

            <?php echo e(Form::submit('Submit',['class'=>'btn btn-lg btn-warning'])); ?>

        </div>
    </div>
    <div class="col-md-12" align="right">
        <a href="/saviews/<?php echo e(Auth::user()->id); ?>" class="btn btn-lg btn-success">Back to Task Page</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>