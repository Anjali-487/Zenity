<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from coderthemes.com/abstack/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 05:13:09 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Zenity - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Vendor css -->
    <link href="/assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!--ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- App css -->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="/assets/js/config.js"></script>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- Menu -->
        <!-- Sidenav Menu Start -->
        <div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="index.html" class="logo">
                <span class="logo-light">
                    <span class=""><img src="/assets/images/logo.png" alt="logo" style="height: 500px; width: 500px;"></span>
                    <span class="logo-sm"><img src="/assets/images/logo.png" style="height: 500px; width: 500px;" alt="small logo"></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><img src="/assets/images/logo-dark.png" alt="dark logo" style="height: 250px; width: 250px;"></span>
                    <span class="logo-sm"><img src="/assets/images/logo-sm.png" alt="small logo" style="height: 250px; width: 250px;"></span>
                </span>
            </a>


            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-fullsidebar">
                <i class="ri-close-line align-middle"></i>
            </button>

            <div data-simplebar>

                <!--- Sidenav Menu -->
                <ul class="side-nav">
                    <li class="side-nav-title">Navigation</li>

                    <li class="side-nav-item">
                        <a href="/home" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="airplay"></i></span>
                            <span class="menu-text fs-4"> Dashboard </span>
                            <span class="badge bg-danger rounded fs-5">9</span>
                        </a>
                    </li>

                    <!-- <li class="side-nav-title">Apps</li> -->

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category" class="side-nav-link">
                            <span class="menu-icon"><i class="fa-solid fa-house"></i></span>
                            <span class="menu-text "> Classifications </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="category">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="/category" class="side-nav-link">
                                        <span class="menu-icon"><i class="fa-solid fa-table-list"></i></span>
                                        <span class="menu-text"> Category </span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="/task" class="side-nav-link">
                                        <span class="menu-icon"><i class="fa-solid fa-list-check"></i></span>
                                        <span class="menu-text"> Tasks </span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="/meditation" class="side-nav-link">
                                        <span class="menu-icon"><i class="fa-solid fa-peace"></i></span>
                                        <span class="menu-text"> Meditation </span>
                                    </a>
                                </li>
                                {{-- <li class="side-nav-item">
                                    <a href="/journal" class="side-nav-link">
                                        <span class="menu-icon"><i class="fa-solid fa-book"></i></span>
                                        <span class="menu-text"> Journals </span>
                                    </a>
                                </li> --}}
                                <li class="side-nav-item">
                                    <a href="/sleepingaid" class="side-nav-link">
                                        <span class="menu-icon"><i class="fa-solid fa-bed"></i></span>
                                        <span class="menu-text"> Sleeping Aid </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="side-nav-item">
                        <a href="/banner" class="side-nav-link">
                            <span class="menu-icon"><i class="fa-brands fa-slideshare"></i></span>
                            <span class="menu-text"> Banner </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/coupon" class="side-nav-link">
                            <span class="menu-icon"><i class="fa-solid fa-film"></i></span>
                            <span class="menu-text"> Offers </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/product" class="side-nav-link">
                            <span class="menu-icon"><i class="fa-brands fa-product-hunt"></i></span>
                            <span class="menu-text"> Products </span>
                        </a>
                        
                    <li class="side-nav-item">
                        <a href="/order" class="side-nav-link">
                            <span class="menu-icon"><i class="fa-solid fa-cart-shopping"></i></span>
                            <span class="menu-text"> Order </span>
                        </a>
                    </li>
                    
                    <li class="side-nav-item">
                        <a href="/therapist" class="side-nav-link">
                            <span class="menu-icon"><i class="fa-solid fa-user-doctor"></i></span>
                            <span class="menu-text"> Therapists </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/users" class="side-nav-link">
                            <span class="menu-icon"><i class="fa-solid fa-users"></i></span>
                            <span class="menu-text"> Users </span>
                        </a>
                    </li>

                    {{-- <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false"
                            aria-controls="sidebarPagesError" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="alert-circle"></i></span>
                            <span class="menu-text"> Error Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesError">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="error-401.html" class="side-nav-link">
                                        <span class="menu-text">401 Unauthorized</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-400.html" class="side-nav-link">
                                        <span class="menu-text">400 Bad Request</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-403.html" class="side-nav-link">
                                        <span class="menu-text">403 Forbidden</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-404.html" class="side-nav-link">
                                        <span class="menu-text">404 Not Found</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-500.html" class="side-nav-link">
                                        <span class="menu-text">500 Internal Server</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-service-unavailable.html" class="side-nav-link">
                                        <span class="menu-text">Service Unavailable</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-404-alt.html" class="side-nav-link">
                                        <span class="menu-text">Error 404 Alt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}

                    <li class="side-nav-item">
                        <a href="/logout" class="side-nav-link">
                            <span class="menu-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></i></span>
                            <span class="menu-text"> Logout </span>
                        </a>
                    </li>

                </ul>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        <header class="app-topbar">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Brand Logo -->
                    <a href="index.html" class="logo">
                        <span class="logo-light">
                            <span class="logo-lg"><img src="/assets/images/logo.png" alt="logo" style="height: 70px; width: ;70px"></span>
                            <span class="logo-sm"><img src="/assets/images/logo-sm.png" alt="small logo" style="height: 70px; width: 70px;"></span>
                        </span>

                        <span class="logo-dark">
                            <span class="logo-lg"><img src="/assets/images/logo-dark.png" alt="dark logo"></span>
                            <span class="logo-sm"><img src="/assets/images/logo-sm.png" alt="small logo"></span>
                        </span>
                    </a>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="sidenav-toggle-button px-2">
                        <i class="ri-menu-2-line fs-24"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="ri-menu-2-line fs-24"></i>
                    </button>

                    <!-- Search for small devices -->
                    <div class="topbar-item d-flex d-xl-none">
                        <button class="topbar-link" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                            <i class="ri-search-line fs-22"></i>
                        </button>
                    </div>

                    <!-- Button Trigger Search Modal -->
                    <div class="topbar-search d-none d-xl-flex gap-2 me-2 align-items-center" data-bs-toggle="modal"
                        data-bs-target="#searchModal" type="button">
                        <i class="ri-search-line fs-18"></i>
                        <span class="me-2">Search something..</span>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2">



                    <!-- Language Dropdown -->
                    <div class="topbar-item">
                        <div class="dropdown">
                            <button class="topbar-link" data-bs-toggle="dropdown" data-bs-offset="0,32" type="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="/assets/images/flags/in.svg" alt="user-image" class="w-100 rounded" height="18"
                                    id="selected-language-image">
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="en">
                                    <img src="/assets/images/flags/us.svg" alt="user-image" class="me-1 rounded" height="18"
                                        data-translator-image> <span class="align-middle">English</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="hi">
                                    <img src="/assets/images/flags/in.svg" alt="user-image" class="me-1 rounded" height="18"
                                        data-translator-image> <span class="align-middle">Hindi</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="/assets/images/flags/de.svg" alt="user-image" class="me-1 rounded" height="18">
                                    <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="/assets/images/flags/it.svg" alt="user-image" class="me-1 rounded" height="18">
                                    <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="/assets/images/flags/es.svg" alt="user-image" class="me-1 rounded" height="18">
                                    <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="/assets/images/flags/ru.svg" alt="user-image" class="me-1 rounded" height="18">
                                    <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Notification Dropdown -->
                    <div class="topbar-item">
                        <div class="dropdown">
                            <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown"
                                data-bs-offset="0,25" type="button" data-bs-auto-close="outside" aria-haspopup="false"
                                aria-expanded="false">
                                <i data-lucide="bell" class="animate-ring fs-22"></i>
                                <span class="noti-icon-badge"></span>
                            </button>

                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">
                                <div class="p-2 border-bottom position-relative border-dashed">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                        </div>
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle drop-arrow-none link-dark"
                                                    data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                                                    <i class="ri-settings-2-line fs-22 align-middle"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Mark as Read</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Delete All</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Do not Disturb</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Other Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative rounded-0" style="max-height: 300px;" data-simplebar>
                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap active" id="notification-1">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="/assets/images/users/avatar-2.jpg" class="avatar-lg rounded-circle"
                                                    alt="" />
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Glady Haid</span> commented on <span
                                                    class="fw-medium text-body">Abstack admin status</span>
                                                <br />
                                                <span class="fs-12">25m ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                    class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                    data-dismissible="#notification-1">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="/assets/images/users/avatar-4.jpg" class="avatar-lg rounded-circle"
                                                    alt="" />
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Tommy Berry</span> donated <span
                                                    class="text-success">$100.00</span> for <span
                                                    class="fw-medium text-body">Carbon removal program</span>
                                                <br />
                                                <span class="fs-12">58m ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                    class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                    data-dismissible="#notification-2">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                        <span class="d-flex align-items-center">
                                            <div class="avatar-lg flex-shrink-0 me-3">
                                                <span class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                                                    <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                                </span>
                                            </div>
                                            <span class="flex-grow-1 text-muted">
                                                You withdraw a <span class="fw-medium text-body">$500</span> by <span
                                                    class="fw-medium text-body">New York ATM</span>
                                                <br />
                                                <span class="fs-12">2h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                    class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                    data-dismissible="#notification-3">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="/assets/images/users/avatar-7.jpg" class="avatar-lg rounded-circle"
                                                    alt="" />
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Richard Allen</span> followed you in <span
                                                    class="fw-medium text-body">Facebook</span>
                                                <br />
                                                <span class="fs-12">3h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                    class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                    data-dismissible="#notification-4">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="/assets/images/users/avatar-10.jpg" class="avatar-lg rounded-circle"
                                                    alt="" />
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Victor Collier</span> liked you recent photo
                                                in <span class="fw-medium text-body">Instagram</span>
                                                <br />
                                                <span class="fs-12">10h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                    class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                    data-dismissible="#notification-5">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item position-absolute bottom-0 notification-item text-center text-reset text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Apps Dropdown -->
                    <div class="topbar-item d-none d-sm-flex">
                        <div class="dropdown">
                            <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown"
                                data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                                <i data-lucide="layout-grid" class="fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/slack.svg" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/gitlab.svg" alt="Github">
                                                <span>Gitlab</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/dribbble.svg" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/bitbucket.svg" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/dropbox.svg" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/google-cloud.svg" alt="G Suite">
                                                <span>G Cloud</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/aws.svg" alt="bitbucket">
                                                <span>AWS</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/digital-ocean.svg" alt="dropbox">
                                                <span>Server</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/assets/images/brands/bootstrap.svg" alt="G Suite">
                                                <span>Bootstrap</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button Trigger Customizer Offcanvas -->
                    <div class="topbar-item d-none d-sm-flex">
                        <button class="topbar-link" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas"
                            type="button">
                            <i data-lucide="settings" class="fs-22"></i>
                        </button>
                    </div>

                    <!-- Light/Dark Mode Button -->
                    <div class="topbar-item d-none d-sm-flex">
                        <button class="topbar-link" id="light-dark-mode" type="button">
                            <i data-lucide="moon" class="light-mode-icon fs-22"></i>
                            <i data-lucide="sun" class="dark-mode-icon fs-22"></i>
                        </button>
                    </div>

                    <!-- User Dropdown -->
                    <div class="topbar-item nav-user">
                        <div class="dropdown">
                            <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown"
                                data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/assets/images/users/avatar-zen.jpg" width="35" class="rounded-circle me-lg-1 d-flex"
                                    alt="user-image">
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    <span class="fw-semibold">
                                        @if(Session::has('user'))
                                            <!-- The content visible when the user is logged in -->
                                            <h5>{{Session::get('user')->username}}</h5>
                                        @else
                                        <script>
                                            window.location.href = "{{ url('/') }}";
                                        </script>
                                        @endif
                                    </span>
                                </span>
                                <i class="ri-arrow-down-s-line d-none d-lg-block align-middle ms-2"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-account-circle-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-wallet-3-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Wallet : <span class="fw-semibold">$89.25k</span></span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-settings-2-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Settings</span>
                                </a>

                                <!-- item-->
                                <a href="/support" class="dropdown-item">
                                    <i class="ri-question-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Support</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-lock-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="/" class="dropdown-item fw-semibold text-danger">
                                    <i class="ri-logout-box-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Sign Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <form action="/search" method="post">
                        @csrf
                        <div class="card mb-1">
                            <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                                <i class="ri-search-line fs-22"></i>
                                <input type="search" class="form-control border-0" id="search-modal-input"
                                    name="q" placeholder="Search for users, orders, categories..." autofocus>
                                <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            let searchInput = document.getElementById('search-modal-input');
        
            // Autofocus input when modal opens
            document.getElementById('searchModal').addEventListener('shown.bs.modal', function() {
                searchInput.focus();
            });
        
            // Pressing Enter submits the form, not input change
            searchInput.addEventListener('keypress', function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    this.closest('form').submit(); // Submit form on Enter
                }
            });
        });
        </script>
        

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">