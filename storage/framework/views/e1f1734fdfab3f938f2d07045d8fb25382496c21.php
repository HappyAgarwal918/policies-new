

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/innerpages.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Settings</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(Session::has('successful_message')): ?>
<div class="alert alert-success">
<?php echo e(Session::get('successful_message')); ?>

</div>
<?php endif; ?>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link active" href="#home"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
            </li>
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link" href="#profile"><i class='fas fa-file-invoice-dollar'></i> Invoices</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active py-3" id="home">
                <div class="row">
                    <div class="col-md-2">
                        <label for="email" class="col-form-label">Email</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="email" class="form-control" aria-describedby="passwordHelpInline" value="<?php echo e(Auth::user()->email); ?>" readonly>
                        <span><a href="<?php echo e(route('change_password')); ?>">Change password</a></span>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade py-3" id="profile">
                <table id="restu_table" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">Name</th>
                            <th class="" scope="col">Status</th>
                            <th class="" scope="col">Date</th>
                            <th class="" scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>                                
                    <?php foreach($users as $user){ ?>
                        <tr>
                            <td><a href="<?php echo e(url('/invoice?form-id='.$user->unique_id)); ?>"><?php  echo $user->type ; ?></a></td>
                            <td><?php if ($user->payment_status == 'succeeded')
                            {echo '<span class="activee">Active</span>';}else{echo '<span class="unpaid">Unpaid</span>';} ?></td>
                            <td><?php echo $user->created; ?></td>
                            <td><?php echo '$'.$user->deal_price; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\policies\resources\views/frontend/settings.blade.php ENDPATH**/ ?>