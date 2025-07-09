<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <title>Log In | Abstack - Responsive Bootstrap 5 Therapist Dashboard</title>
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor.min.css" type="text/css">
    
    <!-- App CSS -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css" id="app-style">
    
    <!-- Icons CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css" type="text/css">
    
    <!-- Theme Config JS -->
    <script src="assets/js/config.js"></script>
</head>
<body>
    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-0 px-xxl-0">
            <div class="col-xl-4 col-lg-5 col-md-7">
                <div class="card overflow-hidden text-center rounded-4 p-xxl-5 p-4 mb-0">
                    <a href="index.html" class="auth-brand mb-4">
                        <img src="assets/images/logo-z.png" alt="dark logo" height="130" width="250" class="logo-dark">
                        <img src="assets/images/logo-z.png" alt="light logo" height="130" width="250" class="logo-light">
                    </a>
                    <h4 class="fw-semibold fs-22 mb-2">Log in to your account,Therapist</h4>
                    <p class="text-muted mb-4">Enter your email address, password, and security question to access the therapist panel.</p>
                    
                    <form action="/t_login" method="POST" class="text-start mb-3" onsubmit="return validateForm(event);">
                        @csrf
                        <div class="mb-2">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter your email">
                            <span id="email-error" class="text-danger"></span>
                        </div>
                        
                        <div class="mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password">
                            <span id="password-error" class="text-danger"></span>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary form-control-lg" style="font-size: 18px; padding: 10px 15px;">Login</button>
                        </div>
                    </form>
                    
                    <p class="mt-4 text-center mb-0">
                        <script>document.write(new Date().getFullYear())</script> © Abstack - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Vendor JS -->
    <script src="assets/js/vendor.min.js"></script>
    
    <!-- App JS -->
    <script src="assets/js/app.js"></script>
    
    <script>
        function validateForm(event) {
            event.preventDefault(); 
            
            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();
            
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            document.getElementById("email-error").textContent = "";
            document.getElementById("password-error").textContent = "";
            
            if (!emailPattern.test(email)) {
                document.getElementById("email-error").textContent = "Please enter a valid email address.";
                return false;
            }
            
            if (password.length < 6 || password.length > 8) {
                document.getElementById("password-error").textContent = "Password must be between 6 to 8 characters.";
                return false;
            }
            
            document.querySelector("form").submit();
        }
    </script>
</body>
</html>
