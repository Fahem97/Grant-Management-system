

<?php $__env->startSection('content'); ?>
<h1>Add Project Milestone</h1>
<form action="<?php echo e(route('milestones.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="research_grant_id" class="form-label">Research Grant</label>
        <select class="form-select" id="research_grant_id" name="research_grant_id" required>
            <?php $__currentLoopData = $researchGrants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($grant->id); ?>"><?php echo e($grant->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Milestone Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="target_completion_date" class="form-label">Target Completion Date</label>
        <input type="date" class="form-control" id="target_completion_date" name="target_completion_date" required>
    </div>
    <div class="mb-3">
        <label for="deliverable" class="form-label">Deliverable</label>
        <input type="text" class="form-control" id="deliverable" name="deliverable" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/milestones/create.blade.php ENDPATH**/ ?>