
<?php $__env->startSection('title'); ?> Legal Policies <?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>

<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Legal</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">ID</th>
                            <th class="" scope="col">Email</th>
                            <th class="" scope="col">Policy</th>
                            <th class="" scope="col">Amount</th>
                            <th class="" scope="col">Transaction ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->payer_email; ?></td>
                            <td><?php echo $user->policy_name; ?></td>
                            <td><?php echo $user->amount; ?></td>
                            <td><?php echo $user->payment_id; ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\policies\resources\views/admin/Payment/Payment.blade.php ENDPATH**/ ?>