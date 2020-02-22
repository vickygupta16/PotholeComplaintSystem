<?php $__env->startSection('content'); ?>
    <div class="container" align="center">
        <h1>Hello <?php echo e(Auth::user()->name); ?></h1>
        <h2>Choose your task</h2>
        <hr style="width: 85%;background-color:black;height:5px">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="height:32rem; width: 18rem;">
                    <img height=50% class="card-img-top" src="<?php echo e(URL::to('assets/images/eye_icon.jpeg')); ?>" alt="Card image cap">
                    <hr style="width:90%;background-color:black">
                    <div style="background-color:black" class="card-body">
                        <h4 style="color: bisque" class="card-title">View All Complaints</h4>
                        <p style="color:yellow" class="card-text">View and check the statuses of any Complaint or delete any unwanted/ fake/ duplicate Complaint</p>
                        <hr style="width:90%;background-color:black">   
                        <a href="/view" class="btn btn-lg btn-outline-danger">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="height:32rem; width: 18rem;">
                    <img height=50% class="card-img-top" src="<?php echo e(URL::to('assets/images/graph_icon.png')); ?>" alt="Card image cap">
                    <hr style="width:90%;background-color:black">
                    <div style="background-color:black" class="card-body">
                        <h4 style="color: bisque" class="card-title">Progress Graph</h4>
                        <p style="color:yellow" class="card-text">After examining number of solved/unsolved Pothole Reports, Update values of Graph.</p>
                        <hr style="width:90%;background-color:black">
                        <a href="#" class="btn btn-outline-danger btn-lg">Update Graph</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr style="width: 85%;background-color:black;height:5px">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="height:30rem; width: 18rem;">
                    <img height=50% class="card-img-top" src="<?php echo e(URL::to('assets/images/adddel_icon.jpg')); ?>" alt="Card image cap">
                    <hr style="width:90%;background-color:black">
                    <div style="background-color:black" class="card-body">
                        <h4 style="color: bisque" class="card-title">Add / Delete Sub-Admin</h4>
                        <p style="color:yellow" class="card-text">According to ward requirements add or delete subadmin.</p>
                        <hr style="width:90%;background-color:black;height:1px">
                        <a href="/sacontrol" class="btn btn-sm btn-outline-danger">Add SubAdmin</a> &nbsp;&nbsp;
                        <a href="/sacontrol/show" class="btn btn-sm btn-outline-danger">Delete SubAdmin</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="height:30rem; width: 18rem;">
                    <img height=50% class="card-img-top" src="<?php echo e(URL::to('assets/images/delua_icon.png')); ?>" alt="Card image cap">
                    <hr style="width:90%;background-color:black">
                    <div style="background-color:black" class="card-body">
                        <h4 style="color: bisque" class="card-title">Delete User Account</h4>
                        <p style="color:yellow" class="card-text">Delete any unused/ fake/ duplicate User Account if needed.</p>
                        <hr style="width:100%;background-color:black;height:1px">
                        <a href="/uacontrol" class="btn btn-outline-danger btn-lg">Delete User Account</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr style="width: 85%;background-color:black;height:5px">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="height:30rem; width: 18rem;">
                    <img height=50% class="card-img-top" src="<?php echo e(URL::to('assets/images/adddel_ward.png')); ?>" alt="Card image cap">
                    <hr style="width:90%;background-color:black">
                    <div style="background-color:black" class="card-body">
                        <h4 style="color: bisque" class="card-title">Add / Delete Ward</h4>
                        <p style="color:yellow" class="card-text">According to User requirements add or delete Ward.</p>
                        <hr style="width:90%;background-color:black;height:1px">
                        <a href="/wardpages/create" class="btn btn-outline-danger">Add Ward</a> &nbsp;&nbsp;
                        <a href="/wardpages/" class="btn btn-outline-danger">Delete Ward</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="height:30rem; width: 18rem;">
                    <img height=50% class="card-img-top" src="<?php echo e(URL::to('assets/images/sug.png')); ?>" alt="Card image cap">
                    <hr style="width:90%;background-color:black">
                    <div style="background-color:black" class="card-body">
                        <h4 style="color: bisque" class="card-title">View All Suggestions</h4>
                        <p style="color:yellow" class="card-text">Read all feedbacks submitted by user/s & take respective options</p>
                        <hr style="width:100%;background-color:black;height:1px">
                        <a href="/suggestions" class="btn btn-outline-danger btn-lg">View Feedbacks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>