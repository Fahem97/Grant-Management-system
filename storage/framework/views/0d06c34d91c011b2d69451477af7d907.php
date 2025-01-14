

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Manage Milestones for <?php echo e($project->title); ?></h1>

    <!-- Add New Milestone Form -->
    <div class="card mb-3">
        <div class="card-header">Add New Milestone</div>
        <div class="card-body">
            <form action="<?php echo e(route('leader.milestones.store', $project->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
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
                <button type="submit" class="btn btn-primary">Add Milestone</button>
            </form>
        </div>
    </div>

    <!-- Existing Milestones List -->
    <h2>Existing Milestones</h2>
    <?php if($project->milestones->isEmpty()): ?>
        <p>No milestones found.</p>
    <?php else: ?>
        <?php $__currentLoopData = $project->milestones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $milestone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3">
                <div class="card-header"><?php echo e($milestone->name); ?> (Target: <?php echo e($milestone->target_completion_date); ?>)</div>
                <div class="card-body">
                    <p>Deliverable: <?php echo e($milestone->deliverable); ?></p>
                    <form action="<?php echo e(route('leader.milestones.update', $milestone->id)); ?>" method="POST" class="d-inline-block">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="text" name="status" placeholder="Enter status" class="form-control mb-2">
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                    <form action="<?php echo e(route('leader.milestones.delete', $milestone->id)); ?>" method="POST" class="d-inline-block">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.leader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/leader/manage-milestones.blade.php ENDPATH**/ ?>