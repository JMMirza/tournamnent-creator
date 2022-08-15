<?php if(isset($row)): ?>
    <a href="<?php echo e(route('gamer-tags.edit', $row->id)); ?>" class="btn btn-sm btn-success btn-icon waves-effect waves-light">
        <i class="mdi mdi-lead-pencil"></i>
    </a>
    <a href="<?php echo e(route('gamer-tags.destroy', $row->id)); ?>" data-table="gamer-tag-data-table"
        class="btn btn-sm btn-danger btn-icon waves-effect waves-light delete-record">
        <i class="ri-delete-bin-5-line"></i>
    </a>
<?php endif; ?>
<?php /**PATH C:\laragon\www\tournament-setup\resources\views/settings/gamer_tags/actions.blade.php ENDPATH**/ ?>