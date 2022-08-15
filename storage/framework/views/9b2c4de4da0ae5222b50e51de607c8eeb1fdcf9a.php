<div class="col-lg-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Create New Status</h4>
        </div>
        <div class="card-body">
            <div class="live-preview">
                <form class="row g-3 needs-validation" novalidate action="<?php echo e(route('statuses.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-md-3">
                        <div class="form-label-group in-border">
                            <input type="text" class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>" id="statusName" name="name" placeholder="Please enter" value="<?php echo e(old('name')); ?>" required>
                            <label for="statusName" class="form-label fs-5 fs-lg-1">Name</label>
                            <div class="invalid-tooltip">
                                <?php if($errors->has('name')): ?>
                                <?php echo e($errors->first('name')); ?>

                                <?php else: ?>
                                Name is required!
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                        <a href="<?php echo e(route('statuses.index')); ?>" class="btn btn-light bg-gradient waves-effect waves-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\tournament-setup\resources\views/settings/statuses/add_status.blade.php ENDPATH**/ ?>