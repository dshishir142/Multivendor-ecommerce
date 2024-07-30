<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
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
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container mt-5">
        <div class="d-flex justify-content-around">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">User</h5>
                    <p class="card-text">Login as User</p>
                    <a href="/login?role=user" class="btn btn-primary">Login</a>
                </div>
            </div>
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Seller</h5>
                    <p class="card-text">Login as Seller</p>
                    <a href="/login?role=seller" class="btn btn-primary">Login</a>
                </div>
            </div>
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Admin</h5>
                    <p class="card-text">Login as Admin</p>
                    <a href="/login?role=admin" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybVu5PHGp9shh42hDR5vK6pXyD2/43jK5jQ/jj8M+4K4p6/2g"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-pZC6egT6NfGrkK36vY9gH9RmA2yCZp/3ZlUllCj3UbsImx5bWKN5X25ufGPFJ9Hz"
        crossorigin="anonymous"
    ></script>
</body>
</html>
