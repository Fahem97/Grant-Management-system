<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="mb-4">Welcome to the Research Management System</h1>
                <p>Please choose a login option:</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="{{ route('admin.login') }}" class="btn btn-primary btn-lg">Admin Login</a>
                    <a href="{{ route('leader.login') }}" class="btn btn-secondary btn-lg">Academician Login</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
