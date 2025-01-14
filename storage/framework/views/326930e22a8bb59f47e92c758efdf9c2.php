<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Grants Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }


        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .table th {
            background-color: rgb(57, 52, 70);
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Project Leader Login</h1>
            <form action="<?php echo e(route('leader.login.post')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="staff_number" class="form-label">Staff Number</label>
                    <input type="text" class="form-control" id="staff_number" name="staff_number" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    <a href="/" class="btn btn-secondary btn-lg">Welcome Page</a>
                </div>
            </form>
        </div>
    </div>
</body><?php /**PATH C:\Users\Alhattami\Desktop\Fahem2\laravel-grants-management\resources\views/auth/leader-login.blade.php ENDPATH**/ ?>