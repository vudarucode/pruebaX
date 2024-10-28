<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <!-- Main Content -->
    <div class="container mt-5">
        <!-- Introduction -->
        <div class="text-center mb-4">
            <h1 class="display-4">Welcome to the Laravel Management System</h1>
            <p class="lead">Use the buttons below to manage departments, education levels, and employees.</p>
        </div>

        <!-- Cards for Navigation -->
        <div class="row g-4">
            <!-- Departments Card -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-building fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title">Departments</h5>
                        <p class="card-text">Manage department records, add new departments, and update existing ones.</p>
                        <a href="{{ route('departments.index') }}" class="btn btn-primary">Go to Departments</a>
                    </div>
                </div>
            </div>

            <!-- Education Levels Card -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-book fs-1 text-success"></i>
                        </div>
                        <h5 class="card-title">Education Levels</h5>
                        <p class="card-text">View, add, and update education level records in the system.</p>
                        <a href="{{ route('education-levels.index') }}" class="btn btn-success">Go to Education Levels</a>
                    </div>
                </div>
            </div>

            <!-- Employees Card -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-people fs-1 text-info"></i>
                        </div>
                        <h5 class="card-title">Employees</h5>
                        <p class="card-text">Manage employee records, create new entries, and update information.</p>
                        <a href="{{ route('employees.index') }}" class="btn btn-info">Go to Employees</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
