<?php $__env->startSection('content'); ?>
    <div align="center" class="container">
        <h2>Choose your task</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a href="/posts/create" style="background-color:crimson" class="btn btn-lg btn-outline-dark">Submit New Complaint</a>
            </div>
            <div class="col-md-6">
                <a href="/posts/<?php echo e(Auth::user()->id); ?>" style="background-color:crimson" class="btn btn-lg btn-outline-dark">Registered Complaints Nearby</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a href="/view" style="background-color:yellow" class="btn btn-lg btn-outline-dark">View All Complaint</a>
            </div>
            <div class="col-md-6">
                <a href="/posts/<?php echo e(Auth::user()->id); ?>/edit" style="background-color:yellow" class="btn btn-lg btn-outline-dark">My Complaint Status</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <a href="/suggestions/create" style="background-color:wheat" class="btn btn-lg btn-outline-dark">Add Final Suggestion for WebSite</a>
            </div>
        </div>
        <hr>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>