<?php
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vehicle Exchange</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" type="x-icone" href="image/logo.png">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-car"></i>DASHBOARD</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fas fa-home"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-car"></i>Vehicle Management</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="inquiries.php" class="dropdown-item">Vehicle Inquiries </a>
                            <a href="vehicle sale.php" class="dropdown-item">Vehicle Sales </a>
                            <a href="vehicle display.php" class="dropdown-item">Vehicle Display </a>
                        </div>
                    </div>
                    <a href="exchange.php" class="nav-item nav-link active"><i class="fa fa-handshake"></i>Vehicle Exchange</a>
                    <a href="maintain.php" class="nav-item nav-link"><i class="fa fa-wrench"></i>Vehicle Maintenance</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-users"></i>Staff Management</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="payment.php" class="dropdown-item"> Salaries </a>
                            <a href="roster.php" class="dropdown-item"> Rosters </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-file-alt me-2"></i>Reports</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="income statement.php" class="dropdown-item">Income Statement</a>
                            <a href="#" class="dropdown-item">Statement Of Financial Position</a>
                            <a href="#" class="dropdown-item">Cash Flow Statement</a>
                        </div>
                    </div></div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="myprofile.php" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="signin.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!--Recent Transactions Start-->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Transactions</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Date</th>
                                    <th scope="col">Transaction No.</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01 Jan 2045</td>
                                    <td>TS-0001</td>
                                    <td>Jhon Doe</td>
                                    <td class="tp-countrycode">761234567</td>
                                    <td class="approved">Approved</td>
                                    <td><a class="fas fa-info-circle"style="font-size:19px"href="#"></a>&nbsp;|&nbsp<a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td></td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2045</td>
                                    <td>TS-0002</td>
                                    <td>Jhon Doe</td>
                                    <td class="tp-countrycode">761234567</td>
                                    <td class="approved">Approved</td>
                                    <td><a class="fas fa-info-circle"style="font-size:19px"href="#"></a>&nbsp;|&nbsp<a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td></td>
                                </tr>
                                <tr>
                                    <td>03 Jan 2045</td>
                                    <td>TS-0003</td>
                                    <td>Jhon Doe</td>
                                    <td class="tp-countrycode">761234567</td>
                                    <td class="rejected">Rejected</td>
                                    <td><a class="fas fa-info-circle"style="font-size:19px"href="#"></a>&nbsp;|&nbsp<a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td></td>
                                </tr>
                                <tr>
                                    <td>04 Jan 2045</td>
                                    <td>TS-0004</td>
                                    <td>Jhon Doe</td>
                                    <td class="tp-countrycode">761234567</td>
                                    <td class="pending">Pending</td>
                                    <td><a class="fas fa-info-circle"style="font-size:19px"href="#"></a>&nbsp;|&nbsp<a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td></td>
                                </tr>
                                <tr>
                                    <td>05 Jan 2045</td>
                                    <td>TS-0005</td>
                                    <td>Jhon Doe</td>
                                    <td class="tp-countrycode">761234567</td>
                                    <td class="approved">Approved</td>
                                    <td><a class="fas fa-info-circle"style="font-size:19px"href="#"></a>&nbsp;|&nbsp<a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Transactions End -->
            
            <!--Profits Start-->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Vehicle Values</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Transaction No.</th>
                                    <th scope="col">Customer Owned Vehicle</th>
                                    <th scope="col">Estimate Value</th>
                                    <th scope="col">Exchanged Vehicle</th>
                                    <th scope="col">Gross Value</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TS-0001</td>
                                    <td>BMW X3 Sedan 2012</td>
                                    <td><span class="currsign">7 500 000</td>
                                    <td>Honda Civic EX TECH 2020</td>
                                    <td><span class="currsign">15 000 000</td>
                                    <td><a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td>TS-0002</td>
                                    <td>Toyota Allion G Grade 2010</td>
                                    <td><span class="currsign">8 000 000</td>
                                    <td>Toyota Axio WXB 2018</td>
                                    <td><span class="currsign">11 000 000</td>
                                    <td><a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td>TS-0005</td>
                                    <td>Suzuki Alto 2010</td>
                                    <td><span class="currsign"></span>4 000 000</td>
                                    <td>Suzuki Wagon R Stingray 2018</td>
                                    <td><span class="currsign">&nbsp;&nbsp;6 500 000</td>
                                    <td><a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td>TS-0006</td>
                                    <td>Toyota Premio G 2011</td>
                                    <td><span class="currsign">10 000 000</td>
                                    <td>Audi A4 S Line 2019</td>
                                    <td><span class="currsign">20 000 000</td>
                                    <td><a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td>TS-0009</td>
                                    <td>Lexus NX300 H F Sport</td>
                                    <td><span class="currsign">16 000 000</td>
                                    <td>Honda CRV AWD 2018</td>
                                    <td><span class="currsign">25 000 000</td>
                                    <td><a class="fas fa-pen" href="#"></a>&nbsp;|&nbsp;<a class="fas fa-trash" href="#"></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Transactions End -->

            <!-- Expense Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Profits</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Transaction No.</th>
                                            <th scope="col">Net Profit</th>
                                        <tr>
                                            <td>TS-0001</td>
                                            <td class="currsign">1 500 000</td>
                                        </tr>
                                        <tr>
                                            <td>TS-0002</td>
                                            <td class="currsign">1 100 000</td>
                                        </tr>
                                        <tr>
                                            <td>TS-0005</td>
                                            <td class="currsign">&nbsp;&nbsp;&nbsp;650 000</td>
                                        </tr>
                                        <tr>
                                            <td>TS-0006</td>
                                            <td class="currsign">2 000 000</td>
                                        </tr>
                                        <tr>
                                            <td>TS-0009</td>
                                            <td class="currsign">2 500 000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Expense Table -->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Monthly Expenses</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Advertising Expenses</td>
                                            <td class="currsign">300 000</td>
                                        <tr>
                                            <td>Maintenance Expenses</td>
                                            <td class="currsign">150 000</td>
                                        </tr>
                                        <tr>
                                            <td>Documentary Fee</td>
                                            <td class="currsign">&nbsp;&nbsp;&nbsp;90 000</td>
                                        </tr>
                                        <tr>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>N/A</td>
                                        </tr>
                                        <tr>
                                            <td>N/A</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Expense Table End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">SkyMotorhub.lk</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="#">Team SkyWalkers</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>