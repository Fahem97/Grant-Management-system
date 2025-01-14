

<?php $__env->startSection('content'); ?>
<h1>Add Research Grant</h1>
<form action="<?php echo e(route('research-grants.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="title" class="form-label">Project Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="grant_provider" class="form-label">Grant Provider</label>
        <input type="text" class="form-control" id="grant_provider" name="grant_provider" required>
    </div>
    <div class="mb-3">
        <label for="grant_amount" class="form-label">Grant Amount</label>
        <input type="number" class="form-control" id="grant_amount" name="grant_amount" required>
    </div>
    <div class="mb-3">
        <label for="start_date" class="form-label">Start Date</label>
        <input type="date" class="form-control" id="start_date" name="start_date" required>
    </div>
    <div class="mb-3">
        <label for="duration_months" class="form-label">Duration (Months)</label>
        <input type="number" class="form-control" id="duration_months" name="duration_months" required>
    </div>
    <div class="mb-3">
        <label for="project_leader_id" class="form-label">Project Leader</label>
        <select class="form-select" id="project_leader_id" name="project_leader_id" required>
            <?php $__currentLoopData = $academicians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academician): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($academician->id); ?>"><?php echo e($academician->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/research_grants/create.blade.php ENDPATH**/ ?>