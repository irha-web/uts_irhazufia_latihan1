<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg" style="background-color: #1976D2;">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="#">POLGAN</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/products">Products</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link text-white" href="/customers">Customers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5>Total Users</h5>
                        <h2>{{ \App\Models\User::count() }}</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5>Dashboard</h5>
                        <p>Welcome Admin</p>
                    </div>
                </div>
            </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5>Status</h5>
                    <p>System Active</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>