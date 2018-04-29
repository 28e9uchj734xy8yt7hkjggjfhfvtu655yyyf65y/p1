<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form role="form" method="POST" action="<?php echo e(url('/password/email')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">E-Mail Address</label>

                            <div class="col-lg-5">
                                <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <div class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-7 offset-lg-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                                <a class="btn btn-link" href="/login">
                                    Sign In
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>