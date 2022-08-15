<?php if(isset($row)): ?>
    <a href="<?php echo e(route('tournaments.edit', $row->id)); ?>" class="btn btn-sm btn-success btn-icon waves-effect waves-light">
        <i class="mdi mdi-lead-pencil"></i>
    </a>
    <a href="<?php echo e(route('tournaments.destroy', $row->id)); ?>" data-table="tournament-data-table"
        class="btn btn-sm btn-danger btn-icon waves-effect waves-light delete-record">
        <i class="ri-delete-bin-5-line"></i>
    </a>
<?php endif; ?>
<?php /**PATH C:\laragon\www\tournament-setup\resources\views/settings/tournaments/actions.blade.php ENDPATH**/ ?>