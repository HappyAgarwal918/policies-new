
<?php $__env->startSection('title'); ?> Legal Policies <?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>
<?php if(Session::has('successful_message')): ?>
<div class="alert alert-success">
<?php echo e(Session::get('successful_message')); ?>

</div>
<?php endif; ?>
<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Legal</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <p><?php echo $legal->legal; ?></p>
                <a href="<?php echo e(route('edit_legal',$legal->id)); ?>" class="ybtn ybtn-accent-color">Edit</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\policies\resources\views/admin/Legal/Legal.blade.php ENDPATH**/ ?>