<?php if($row->status->name == 'In-Active' || $row->status->name == null): ?>
    <span class="badge bg-danger">In Active</span>
<?php else: ?>
    <span class="badge bg-info">Active</span>
<?php endif; ?>
<?php /**PATH C:\laragon\www\tournament-setup\resources\views/components/status_badge.blade.php ENDPATH**/ ?>