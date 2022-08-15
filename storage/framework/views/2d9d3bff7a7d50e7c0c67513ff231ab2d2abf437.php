<?php if(isset($row)): ?>
    <a href="<?php echo e(route('statuses.edit', $row->id)); ?>" class="btn btn-sm btn-success btn-icon waves-effect waves-light">
        <i class="mdi mdi-lead-pencil"></i>
    </a>
    <a href="<?php echo e(route('statuses.destroy', $row->id)); ?>" data-table="status-data-table"
        class="btn btn-sm btn-danger btn-icon waves-effect waves-light delete-record">
        <i class="ri-delete-bin-5-line"></i>
    </a>
<?php endif; ?>
<?php /**PATH C:\laragon\www\tournament-setup\resources\views/settings/statuses/actions.blade.php ENDPATH**/ ?>