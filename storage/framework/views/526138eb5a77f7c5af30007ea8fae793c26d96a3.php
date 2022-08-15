<div class="col-lg-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Create New Team</h4>
        </div>
        <div class="card-body">
            <div class="live-preview">
                <form class="row g-3 needs-validation" novalidate action="<?php echo e(route('teams.store')); ?>"
                    enctype='multipart/form-data' method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-md-4">
                        <div class="form-label-group in-border">
                            <input type="text"
                                class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>" id="statusName"
                                name="name" placeholder="Please enter" value="<?php echo e(old('name')); ?>" required>
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
                    <div class="col-md-4">
                        <div class="form-label-group in-border">
                            <input type="number"
                                class="form-control <?php if($errors->has('number_of_members')): ?> is-invalid <?php endif; ?>"
                                id="number_of_members" name="number_of_members" placeholder="Please enter"
                                value="<?php echo e(old('number_of_members')); ?>" required>
                            <label for="number_of_members" class="form-label fs-5 fs-lg-1">Number of Members</label>
                            <div class="invalid-tooltip">
                                <?php if($errors->has('number_of_members')): ?>
                                    <?php echo e($errors->first('number_of_members')); ?>

                                <?php else: ?>
                                    Number of Members is required!
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-label-group in-border">
                            <select class="form-select form-control mb-3" name="status_id" required>
                                <option value="" <?php if(old('status_id') == ''): ?> <?php echo e('selected'); ?> <?php endif; ?>
                                    selected disabled>
                                    Select One
                                </option>
                                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($status->id); ?>"
                                        <?php if(old('status_id') == $status->id): ?> <?php echo e('selected'); ?> <?php endif; ?>>
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
                    <div class="col-md-12 col-sm-12">
                        <div class="form-label-group in-border">
                            <input type="file"
                                class="form-control <?php if($errors->has('team_logo')): ?> is-invalid <?php endif; ?>" id="team_logo"
                                name="team_logo" placeholder="" value="<?php echo e(old('team_logo')); ?>" required>
                            <label for="team_logo" class="form-label">Team Logo</label>
                            <div class="invalid-tooltip">
                                <?php if($errors->has('team_logo')): ?>
                                    <?php echo e($errors->first('team_logo')); ?>

                                <?php else: ?>
                                    Team Logo is required!
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                        <a href="<?php echo e(route('teams.index')); ?>"
                            class="btn btn-light bg-gradient waves-effect waves-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\tournament-setup\resources\views/settings/teams/add_new.blade.php ENDPATH**/ ?>