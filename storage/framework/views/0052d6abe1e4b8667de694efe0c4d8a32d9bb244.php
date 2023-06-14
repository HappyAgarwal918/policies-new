
<?php $__env->startSection('title'); ?> Legal Policies <?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>
<?php if(Session::has('successful_message')): ?>
<div class="alert alert-success">
<?php echo e(Session::get('successful_message')); ?>

</div>
<?php endif; ?>
<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Users</h3>
  </div>
</div>
<div class="form-group row pl-5 pb-3">
    <a href="<?php echo e(route('register_user')); ?>" type="submit" class="ybtn ybtn-accent-color">Add New User</a>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="admins-tab" data-toggle="tab" href="#admins" role="tab" aria-controls="admins" aria-selected="true">Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="active-tab" data-toggle="tab" href="#active" role="tab" aria-controls="active" aria-selected="false">Active Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="unverified-tab" data-toggle="tab" href="#unverified" role="tab" aria-controls="unverified" aria-selected="false">Unverified Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="deleted-tab" data-toggle="tab" href="#deleted" role="tab" aria-controls="deleted" aria-selected="false">Deleted Users</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="admins" role="tabpanel" aria-labelledby="admins-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">Email ID</th>
                                    <th class="" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php $users = DB::table('users')
                                ->where('admin' , 2)->whereNotNull('email_verified_at')
                                ->where('deleted_at' , null)
                                ->get(); foreach($users as $user){  ?>
                                <tr>
                                    <td><?php echo $user->id; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td>
                                        <a href="<?php echo e(route('edit_admin_user',$user->email)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo e(route('user_policies',$user->email)); ?>" class="btn btn-primary btn-sm">Policies</a>
                                        <a href="<?php echo e(route('delete_user',$user->id)); ?>" class="btn btn-danger btn-sm">Delete User</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="active" role="tabpanel" aria-labelledby="active-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">Email ID</th>
                                    <th class="" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php $users = DB::table('users')
                                ->where('admin' , 0)->whereNotNull('email_verified_at')
                                ->where('deleted_at' , null)
                                ->get(); foreach($users as $user){  ?>
                                <tr>
                                    <td><?php echo $user->id; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td>
                                        <a href="<?php echo e(route('edit_admin_user',$user->email)); ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?php echo e(route('user_policies',$user->email)); ?>" class="btn btn-success btn-sm">Policies</a>
                                        <a href="<?php echo e(route('delete_user',$user->id)); ?>" class="btn btn-danger btn-sm">Delete User</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="unverified" role="tabpanel" aria-labelledby="unverified-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">Email ID</th>
                                    <th class="" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php $users = DB::table('users')
                                ->where('admin' , 0)->where('email_verified_at' , null)
                                ->get(); foreach($users as $user){  ?>
                                <tr>
                                    <td><?php echo $user->id; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td>                           
                                        <a href="<?php echo e(route('activate_user',$user->email)); ?>" class="btn btn-success btn-sm">Activate</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="deleted" role="tabpanel" aria-labelledby="deleted-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">Email ID</th>
                                    <th class="" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php $users = DB::table('users')
                                ->whereNotNull('deleted_at')->get(); ?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('edit_admin_user',$user->email)); ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?php echo e(route('restore_user',$user->id)); ?>" class="btn btn-danger btn-sm">Restore</a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\policies\resources\views/admin/User/User.blade.php ENDPATH**/ ?>