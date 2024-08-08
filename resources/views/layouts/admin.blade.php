<!-- resources/views/layouts/admin.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <style>
        body {
            display: flex;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
        }
        #content {
            flex-grow: 1;
            padding: 20px;
        }
        .nav-link {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav id="sidebar" class="bg-light">
        <div class="sidebar-header text-center py-4">
            <h3>Admin Dashboard</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user') }}">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.seller') }}">Seller</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.products') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.role') }}">Role</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.category') }}">Category</a>
            </li>
        </ul>
    </nav>

    <div id="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    
    @stack('image-script')
</body>
</html>
