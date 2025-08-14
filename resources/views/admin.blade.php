<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h4 class="text-center mb-4">Admin Panel</h4>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a href="#">Manage Users</a>
                <a href="#">Manage Posts</a>
                <a href="#">Settings</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>

            <!-- Content -->
            <div class="col-md-10 p-4">
                <nav class="navbar navbar-light bg-light mb-4 shadow-sm p-3">
                    <span class="navbar-brand mb-0 h1">Welcome, Admin</span>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
