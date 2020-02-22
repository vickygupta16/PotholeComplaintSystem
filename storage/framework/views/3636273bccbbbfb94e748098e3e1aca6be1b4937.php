<?php $__env->startSection('content'); ?>
<br><br>

    <div class="container">
        <h2>Welcome Main Admin</h2>
        <a href="/posts" class="btn btn-light">Go</a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header">Welcome!</div>
                    <div align="center" class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>


                        <h2>Now you can begin to submit your complaint.</h2>
                        <a href="/posts/create" class="btn btn-dark">Submit a Complaint</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>