<!doctype html>
<html lang="en">
<head>
    <title>Seller Registration</title>
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Seller Registration</h4>
                    </div>
                    <div class="card-body">
                        <form action="/sellerRegister" method="POST" enctype="multipart/form-data">
                            <!-- Assuming you are using CSRF protection in Laravel -->
                            @csrf
                            <input type="hidden" name="role" value="seller">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="pan_no" class="form-label">PAN Number</label>
                                <input type="text" class="form-control" id="pan_no" name="pan_no" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                            </div>
                            <div class="mb-3">
                                <label for="citizenship_photo" class="form-label">Citizenship Photo</label>
                                <input type="file" class="form-control" id="citizenship_photo" name="citizenship_photo" required>
                            </div>
                            <div class="mb-3">
                                <label for="shop_address" class="form-label">Shop Address</label>
                                <input type="text" class="form-control" id="shop_address" name="shop_address" required>
                            </div>
                            <div class="mb-3">
                                <label for="shop_photo" class="form-label">Shop Photo</label>
                                <input type="file" class="form-control" id="shop_photo" name="shop_photo" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/login?role=seller">Already have an account? Login</a>
                    </div>
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
