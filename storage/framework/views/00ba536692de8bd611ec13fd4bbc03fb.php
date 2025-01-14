

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Project Milestones</h1>
    <a href="<?php echo e(route('milestones.create')); ?>" class="btn btn-success">Add Milestone</a>
</div>
<table class="table table-hover shadow-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Milestone Name</th>
            <th>Target Completion Date</th>
            <th>Deliverable</th>
            <th>Grant Title</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $milestones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $milestone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($milestone->id); ?></td>
            <td><?php echo e($milestone->name); ?></td>
            <td><?php echo e($milestone->target_completion_date); ?></td>
            <td><?php echo e($milestone->deliverable); ?></td>
            <td><?php echo e($milestone->grant->title); ?></td>
            <td><?php echo e($milestone->status ?? 'Pending'); ?></td>
            <td>
                <a href="<?php echo e(route('milestones.edit', $milestone->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                <form action="<?php echo e(route('milestones.destroy', $milestone->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/milestones/index.blade.php ENDPATH**/ ?>