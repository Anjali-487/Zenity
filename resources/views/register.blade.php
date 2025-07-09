<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/abstack/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 05:13:56 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Sign Up | Abstack - Responsive Bootstrap 5 Admin Dashboard</title>
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

<body class="h-100">

    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="card overflow-hidden text-center rounded-4 p-xxl-5 p-4 mb-0 w-100">
                    <a href="index.html" class="auth-brand mb-4">
                        <img src="assets/images/logo-z.png" alt="dark logo" height="130" class="logo-dark">
                        <img src="assets/images/logo-z.png" alt="logo light" height="130" class="logo-light">
                    </a>

                    <h4 class="fw-semibold mb-2 fs-22">Welcome to Zenity Admin</h4>

                    <p class="text-muted mb-4">Enter your personal details to access account.</p>
                    <form action="/regis" class="text-start mb-3" method="POST">
                        @csrf
                        <div class="mb-2">
                            <input type="text" id="username" name="username" class="form-control form-control-lg"
                                placeholder="Enter your name">
                            <span id="username-error" class="text-danger"></span>
                        </div>

                        <div class="mb-2">
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter your email">
                            <span id="email-error" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter your password">
                            <span id="password-error" class="text-danger"></span>
                            </div>

                        <div class="mb-3">
                            <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg"
                                placeholder="Enter Confirm password">
                            <span id="cpassword-error" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="security_question" class="form-label">Security Question</label>
                            <select id="security_question" name="security_question" class="form-control form-control-lg">
                                <option value="">Select a security question</option>
                                <option value="pet">What is the name of your first pet?</option>
                                <option value="school">What was the name of your primary school?</option>
                                <option value="mother">What is your mother's maiden name?</option>
                            </select>
                            <span id="security-question-error" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <input type="text" id="security_answer" name="security_answer" class="form-control form-control-lg" placeholder="Enter your answer">
                            <span id="security-answer-error" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <input name="mobileno" type="text" id="mobileno" class="form-control form-control-lg"
                                placeholder="Enter your Mobile_no">
                            <span id="mobileno-error" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <input type="text" id="role" name="role" class="form-control form-control-lg"
                                placeholder="Enter your role">
                            <span id="role-error" class="text-danger"></span>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label " for="checkbox-signin">I agree to all <a href="#!"
                                        class="link-dark text-decoration-underline ">Terms & Condition</a> </label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit" style="font-size: 18px; padding: 10px 15px;"><strong> Sign Up</strong></button>
                        </div>
                    </form>

                    <p class="text-nuted fs-20 mb-0">Already have an account? <a href="\" 
                        class="fw-semibold text-danger ms-1">Login !</a></p>

                </div>
                <p class="mt-4 text-center mb-0">
                    <script>document.write(new Date().getFullYear())</script> © Abstack - By <span
                        class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

{{-- <script>
    function validateForm(event) {
        event.preventDefault();

        let password = document.getElementById("password").value.trim();
        let cpassword = document.getElementById("cpassword").value;
        let mobileno = document.getElementById("mobileno").value.trim();

        if (password.length < 6 || password.length > 8) {
            alert("Password must be between 6 to 8 characters.");
            return false;
        }

        if (cpassword !== password) {
            alert("Confirm Password should match Password.");
            return false;
        }

        if (!/^\d{10}$/.test(mobileno)) {
            alert("Mobile number must be exactly 10 digits.");
            return false;
        }

        document.querySelector("form").submit();
    }
</script> --}}
<script>
    function validateForm(event) {
        event.preventDefault();
        document.querySelectorAll(".text-danger").forEach(el => el.textContent = "");

        let email = document.getElementById("email").value.trim();
        let password = document.getElementById("password").value.trim();
        let cpassword = document.getElementById("cpassword").value;
        let mobileno = document.getElementById("mobileno").value.trim();

        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            document.getElementById("email-error").textContent = "Please enter a valid email address.";
            return false;
        }

        if (password.length < 6 || password.length > 8) {
            document.getElementById("password-error").textContent = "Password must be between 6 to 8 characters.";
            return false;
        }

        if (cpassword !== password) {
            document.getElementById("cpassword-error").textContent = "Confirm Password should match Password.";
            return false;
        }

        if (!/^\d{10}$/.test(mobileno)) {
            document.getElementById("mobileno-error").textContent = "Mobile number must be exactly 10 digits.";
            return false;
        }

        document.querySelector("form").submit();
    }
</script>

<!-- Mirrored from coderthemes.com/abstack/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 05:13:56 GMT -->
</html>  