
<?php $__env->startSection('content'); ?>
<h1>Your Projects</h1>
<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3">
        <div class="card-header">
            <?php echo e($project->title); ?> (<?php echo e($project->grant_provider); ?>)
        </div>
        <div class="card-body">
            <p>Start Date: <?php echo e($project->start_date); ?></p>
            <p>Duration: <?php echo e($project->duration_months); ?> months</p>
            <a href="<?php echo e(route('leader.members', $project->id)); ?>" class="btn btn-secondary">Manage Members</a>
            <a href="<?php echo e(route('leader.milestones', $project->id)); ?>" class="btn btn-secondary">Manage Milestones</a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.leader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/leader/dashboard.blade.php ENDPATH**/ ?>