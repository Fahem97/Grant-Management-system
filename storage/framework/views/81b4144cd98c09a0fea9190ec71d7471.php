

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Academicians</h1>
    <a href="<?php echo e(route('academicians.create')); ?>" class="btn btn-success">Add Academician</a>
</div>
<table class="table table-hover shadow-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Staff Number</th>
            <th>Email</th>
            <th>College</th>
            <th>Department</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $academicians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academician): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($academician->id); ?></td>
            <td><?php echo e($academician->name); ?></td>
            <td><?php echo e($academician->staff_number); ?></td>
            <td><?php echo e($academician->email); ?></td>
            <td><?php echo e($academician->college); ?></td>
            <td><?php echo e($academician->department); ?></td>
            <td><?php echo e($academician->position); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/academicians/index.blade.php ENDPATH**/ ?>