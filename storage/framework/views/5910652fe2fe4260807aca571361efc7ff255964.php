

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/policy.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $id = $_GET['form-id'];
$policy_data = DB::table('policy')->leftjoin('payments','policy.newunique','payments.payunique')->where('unique_id', $id)->first();
?>

<div class="policy-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=""><h4>Review and confirm</h4></div>
            </div>
        </div>
    </div>
</div>
<?php if(Session::has('error_message')): ?>
<div class="alert alert-danger">
<?php echo e(Session::get('error_message')); ?>

</div>
<?php endif; ?>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="<?php if(isset(auth()->user()->admin) && (auth()->user()->admin == 1 || auth()->user()->admin == 2) || $policy_data->payment_status == 'succeeded'){ echo 'complete?form-id='.$id; } elseif($policy_data->premium == 1 || $policy_data->company == 1 || $policy_data->sell == 1 || $policy_data->execute == 1 || $policy_data->install == 1 || $policy_data->bulk == 1 || $policy_data->backup_fee == 1 || $policy_data->actions == 1){ echo 'billing?form-id='.$id; } else{ echo 'complete?form-id='.$id; } ?>" method="post" id="">
          <?php echo csrf_field(); ?>
          <div class="panel-body">
            <div class="progress">
              <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for=""><strong><?php echo e($policy_data->platforms); ?></strong></label>
              <div class="col-sm-6">
                <?php if ($policy_data->platforms = 'Mobile App Name'){ echo $policy_data->mobile_name; }
                      if ($policy_data->platforms = 'Website URL'){ echo $policy_data->website_url;} ?>
              </div>
            </div>
            <?php if(auth()->guard()->check()): ?>
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for="email">Your email address</label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control form_font <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="<?php echo e($data->email); ?>" maxlength="255" <?php if (auth()->user()->admin =='0' || auth()->user()->admin =='2') echo "readonly='readonly'"; ?> />
              </div>
              <span class="help">You will receive your acceptable use policy to this email address</span>
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <label id="email-error" class="error" for="email"></label>
            </div>
            <?php if($data->admin == '1'): ?>
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for="password">Set Your Password</label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control form_font <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" maxlength="255">
              </div>
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for="email">Your email address</label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control form_font <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="" maxlength="255" />
              </div>
              <span class="help">You will receive your acceptable use policy to this email address</span>
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <label id="email-error" class="error" for="email"></label>
            </div>
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for="password">Set Your Password</label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control form_font <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" maxlength="255">
              </div>
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <?php endif; ?>
            <?php if($policy_data->premium == 1 || $policy_data->company == 1 || $policy_data->sell == 1 || $policy_data->execute == 1 || $policy_data->install == 1 || $policy_data->bulk == 1 || $policy_data->backup_fee == 1 || $policy_data->actions == 1): ?>
            <input type="hidden" name="url" value="<?php echo 'acceptable-use-premium-policy?form-id='.$id ?>" />
            <input type="hidden" name="link" value="<?php echo 'billing?form-id='.$id ?>" />
            <input type="hidden" name="type" value="Premium" />
            <?php else: ?>
            <input type="hidden" name="url" value="<?php echo 'acceptable-use-premium-policy?form-id='.$id ?>" />
            <input type="hidden" name="link" value="<?php echo 'acceptable-use-basic-policy?form-id='.$id ?>" />
            <input type="hidden" name="type" value="Basic" />
            <?php endif; ?>
            <div class="form-group form_part">
              <div class="col-sm-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="terms" value="1" id="terms" />
                  <label class="form-check-label" for="terms">I have read and agree to the <a target="_blank" href="{ route('termsandprivacy')}}">terms of service</a>.</label>
                </div>
              </div>
            </div>
          </div>
          <div>
              <button type="submit" class="ybtn ybtn-accent-color">Create Acceptable Policy</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('asset/js/policy.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\policies\resources\views/policy/acceptable-use-policy-final.blade.php ENDPATH**/ ?>