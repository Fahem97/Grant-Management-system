

<?php $__env->startSection('content'); ?>
<h1>Edit Project Milestone</h1>
<form action="<?php echo e(route('milestones.update', $milestone->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="research_grant_id" class="form-label">Research Grant</label>
        <select class="form-select" id="research_grant_id" name="research_grant_id" required>
            <?php $__currentLoopData = $researchGrants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($grant->id); ?>" <?php echo e($grant->id == $milestone->research_grant_id ? 'selected' : ''); ?>>
                <?php echo e($grant->title); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Milestone Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($milestone->name); ?>" required>
    </div>
    <div class="mb-3">
        <label for="target_completion_date" class="form-label">Target Completion Date</label>
        <input type="date" class="form-control" id="target_completion_date" name="target_completion_date" value="<?php echo e($milestone->target_completion_date); ?>" required>
    </div>
    <div class="mb-3">
        <label for="deliverable" class="form-label">Deliverable</label>
        <input type="text" class="form-control" id="deliverable" name="deliverable" value="<?php echo e($milestone->deliverable); ?>" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="<?php echo e($milestone->status); ?>">
    </div>
    <div class="mb-3">
        <label for="remark" class="form-label">Remark</label>
        <textarea class="form-control" id="remark" name="remark"><?php echo e($milestone->remark); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/milestones/edit.blade.php ENDPATH**/ ?>