

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Research Grants</h1>
    <a href="<?php echo e(route('research-grants.create')); ?>" class="btn btn-success">Add Research Grant</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Grant Provider</th>
            <th>Grant Amount</th>
            <th>Start Date</th>
            <th>Duration (Months)</th>
            <th>Project Leader</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $researchGrants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($grant->id); ?></td>
            <td><?php echo e($grant->title); ?></td>
            <td><?php echo e($grant->grant_provider); ?></td>
            <td><?php echo e($grant->grant_amount); ?></td>
            <td><?php echo e($grant->start_date); ?></td>
            <td><?php echo e($grant->duration_months); ?></td>
            <td><?php echo e($grant->leader->name); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/research_grants/index.blade.php ENDPATH**/ ?>