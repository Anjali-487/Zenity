<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Reset Password | Abstack - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Vendor css -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <style>
        .auth-bg {
            background: url('assets/images/bg-zenity.jpg') no-repeat center center/cover;
        }
    </style>
</head>

<body>
    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-0 px-xxl-0 m-0">
            <div class="col-xl-4 col-lg-5 col-md-7">
                <div class="card overflow-hidden text-center rounded-4 p-xxl-5 p-4 mb-0">
                    <a href="index.html" class="auth-brand mb-4">
                        <img src="assets/images/logo-z.png" alt="dark logo" height="130" width="250" class="logo-dark">
                        <img src="assets/images/logo-z.png" alt="logo light" height="130" width="250" class="logo-light">
                    </a>

                    <h4 class="fw-semibold mb- fs-22">Reset Password</h4>
                    <p class="text-muted mb-4">Enter your new password to reset.</p>

                    <form action="/resetpass" method="POST" class="text-start mb-3">
                        @csrf
                        <div class="mb-2">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Enter your username" required>
                        </div>

                        <div class="mb-2">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter new password" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg" placeholder="Confirm new password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary form-control-lg" style="font-size: 18px; padding: 10px 15px;">Reset Password</button>
                        </div>
                    </form>
                </div>

                <p class="mt-4 text-center mb-0">
                    <script>document.write(new Date().getFullYear())</script> © Abstack - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            let password = document.getElementById("password").value;
            let cpassword = document.getElementById("cpassword").value;

            if (password !== cpassword) {
                event.preventDefault();
                alert("Passwords do not match.");
            }
        });
    </script>
</body>
</html>