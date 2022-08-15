<div class="col-lg-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Edit Gamer Tag</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form class="row g-3 needs-validation" novalidate action="<?php echo e(route('gamer-tags.update', $gamerTag->id)); ?>"
                    method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="col-md-4">
                        <div class="form-label-group in-border">
                            <input type="text"
                                class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>"
                                id="gamerTagName" name="name" placeholder="Please enter"
                                value="<?php echo e($gamerTag->name); ?>" required>
                            <label for="gamerTagName" class="form-label fs-5 fs-lg-1">Name</label>
                            <div class="invalid-tooltip">
                                <?php if($errors->has('name')): ?>
                                    <?php echo e($errors->first('name')); ?>

                                <?php else: ?>
                                    Name is required!
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-label-group in-border">
                            <input type="text"
                                class="form-control <?php if($errors->has('abbreviation')): ?> is-invalid <?php endif; ?>"
                                id="abbreviation" name="abbreviation" placeholder="Please enter"
                                value="<?php echo e($gamerTag->abbriation); ?>">
                            <label for="abbreviation" class="form-label fs-5 fs-lg-1">Abbreviation</label>
                            <div class="invalid-tooltip">
                                <?php if($errors->has('abbreviation')): ?>
                                    <?php echo e($errors->first('abbreviation')); ?>

                                <?php else: ?>
                                    Abbreviation is required!
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-label-group in-border">
                            <select class="form-select form-control mb-3" name="status_id" required>
                                <option value="" <?php if($gamerTag->status_id == ''): ?> <?php echo e('selected'); ?> <?php endif; ?>
                                    selected disabled>
                                    Select One
                                </option>
                                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($status->id); ?>"
                                        <?php if($gamerTag->status_id == $status->id): ?> <?php echo e('selected'); ?> <?php endif; ?>>
                                        <?php echo e($status->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label for="status" class="form-label fs-5 fs-lg-1">Status</label>
                            <div class="invalid-tooltip">
                                <?php if($errors->has('status_id')): ?>
                                    <?php echo e($errors->first('status_id')); ?>

                                <?php else: ?>
                                    PLease select any Status!
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                        <a href="<?php echo e(route('statuses.index')); ?>"
                            class="btn btn-light bg-gradient waves-effect waves-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\tournament-setup\resources\views/settings/gamer_tags/edit.blade.php ENDPATH**/ ?>