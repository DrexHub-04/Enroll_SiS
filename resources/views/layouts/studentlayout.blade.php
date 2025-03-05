<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="../text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.png" />

    <style>
        .sidebar {
            position: fixed;
            top: 100;
            left: 0;
            height: 100vh;
            overflow-y: auto;
            background: linear-gradient(to bottom, #85C1E9, #3498DB);
            color: white;
            border-radius: 0px;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
    color: white;

        }
        .page-body-wrapper {
            margin-left: 220px;
        }
        .nav-item a {
    color: white;
    transition: 0.3s;
}

.nav-item a:hover {
    color: #ffcc00; /* Gold hover effect */
    font-weight: bold;
}

.nav-item a.active {
    background-color: white;
    color: #0044cc;
    font-weight: bold;
    border-radius: 8px;
    padding: 10px;
}

    </style>

</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <nav class="navbar default-layout col-lg-12 col-12 fixed-top d-flex align-items-top flex-row border-bottom">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <span class="text-dark" style="font-size: 24px; font-weight: bold;">Student</span>
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item fw-semibold d-none d-lg-block ms-0">
                        <h2 class=" text-dark m-0">Welcome, Student <span class="text-dark font-weight-bold m-0" style="font-weight:bold">{{ auth()->user()->name }}</span></h2>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator position-relative" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-bell-ring fs-5"></i>
                            <span class="count-symbol bg-danger position-absolute top-0 start-100 translate-middle badge rounded-pill">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list pb-0 shadow-sm" aria-labelledby="countDropdown">
                            <a class="dropdown-item py-3 bg-light">
                                <p class="mb-0 fw-bold float-start">Notifications</p>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success rounded-circle">
                                        <i class="mdi mdi-chart-line text-white"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis fw-medium text-dark">Grade Posted: Mathematics</p>
                                    <p class="fw-light small-text mb-0">Your midterm grade has been posted</p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning rounded-circle">
                                        <i class="mdi mdi-calendar-clock text-white"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis fw-medium text-dark">Assignment Due: Physics Report</p>
                                    <p class="fw-light small-text mb-0">Due tomorrow at 11:59 PM</p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info rounded-circle">
                                        <i class="mdi mdi-bullhorn text-white"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis fw-medium text-dark">Class Announcement: English</p>
                                    <p class="fw-light small-text mb-0">Class cancelled for tomorrow</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-account-circle img-xs rounded-circle text-primary" style="font-size: 30px;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                            <i class="mdi mdi-account-circle img-md rounded-circle text-primary" style="font-size: 50px;"></i>
                                <p class="mb-1 mt-3 fw-semibold">{{ auth()->user()->name }}</p>
                                <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
                            </div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <button type="submit" class="dropdown-item text-danger">
                            <i class="mdi mdi-logout menu-icon"></i> Log Out
                            </button>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="mdi mdi-view-dashboard menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </nav>
            @yield('content')
        </div>
    </div>
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/chart.umd.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
</body>

</html>