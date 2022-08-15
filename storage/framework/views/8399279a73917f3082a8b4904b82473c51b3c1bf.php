<?php if(isset($row)): ?>
    <a href="<?php echo e(route('teams.edit', $row->id)); ?>" class="btn btn-sm btn-success btn-icon waves-effect waves-light">
        <i class="mdi mdi-lead-pencil"></i>
    </a>
    <a href="<?php echo e(route('teams.destroy', $row->id)); ?>" data-table="teams-data-table"
        class="btn btn-sm btn-danger btn-icon waves-effect waves-light delete-record">
        <i class="ri-delete-bin-5-line"></i>
    </a>
<?php endif; ?>
<?php /**PATH C:\laragon\www\tournament-setup\resources\views/settings/teams/actions.blade.php ENDPATH**/ ?>