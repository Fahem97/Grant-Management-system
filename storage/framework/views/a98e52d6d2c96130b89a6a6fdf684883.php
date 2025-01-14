

<?php $__env->startSection('content'); ?>
<h1>Add Academician</h1>
<form action="<?php echo e(route('academicians.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="staff_number" class="form-label">Staff Number</label>
        <input type="text" class="form-control" id="staff_number" name="staff_number" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="college" class="form-label">College</label>
        <input type="text" class="form-control" id="college" name="college" required>
    </div>
    <div class="mb-3">
        <label for="department" class="form-label">Department</label>
        <input type="text" class="form-control" id="department" name="department" required>
    </div>
    <div class="mb-3">
        <label for="position" class="form-label">Position</label>
        <select class="form-select" id="position" name="position" required>
            <option value="Professor">Professor</option>
            <option value="Associate Professor">Associate Professor</option>
            <option value="Senior Lecturer">Senior Lecturer</option>
            <option value="Lecturer">Lecturer</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/academicians/create.blade.php ENDPATH**/ ?>