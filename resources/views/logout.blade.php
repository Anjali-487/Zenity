<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Logout | Zenity - Mental Wellness Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured mental health platform for well-being." name="description" />
    <meta content="Zenity" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <style>
        .auth-bg {
            background: url('{{ asset('assets/images/bg-zenity.jpg') }}') no-repeat center center/cover;
        }
    </style>
</head>

<body>
    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-0 px-xxl-0 m-0">
            <div class="col-xl-4 col-lg-5 col-md-7">
                <div class="card overflow-hidden text-center rounded-4 p-xxl-5 p-4 mb-0">
                    <a href="{{ url('/') }}" class="auth-brand mb-4">
                        <img src="{{ asset('assets/images/logo-z.png') }}" alt="Zenity Logo" height="130" width="250" class="logo-dark">
                    </a>

                    <h4 class="fw-semibold mb- fs-22">Logging Out</h4>
                    <p class="text-muted mb-4">You are being logged out. Please wait...</p>

                    <form id="logout-form" action="/logout" method="POST" class="text-start mb-3" style="display: none;">
                        @csrf
                    </form>
                    
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                    class="btn btn-primary form-control-lg" 
                    style="font-size: 18px; padding: 10px 15px;">
                    Logout
                    </a>

                <p class="mt-4 text-center mb-0">
                    <script>document.write(new Date().getFullYear())</script> © Zenity - All Rights Reserved
                </p>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        setTimeout(function() {
            document.getElementById('logout-form').submit();
        }, 2000);
    </script>
</body>
</html>
