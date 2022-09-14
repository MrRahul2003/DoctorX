<!-- fladjnlshnjl -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!-- ---------------------------------------------- -->
<nav class="navbar navbar-dark bg-primary" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><strong class="text-light">DocterX</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark"
            aria-controls="offcanvasNavbarDark">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbarDark"
            aria-labelledby="offcanvasNavbarDarkLabel">
            <div class="offcanvas-header">
                <h3 class="offcanvas-title" id="offcanvasNavbarDarkLabel"><strong class="text-dark">DocterX</strong>
                </h3>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <!-- ------------------------------------ -->
            <div class="p-3 m-0 border-0 bd-example">

                <div class="offcanvas-body">

                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <svg class="bi pe-none me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-4"><strong class="text-dark">Profile</strong></span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                Customers
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-current="page">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Settings...
                            </a>
                            <a href="#" class="nav-link" aria-current="page">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Logout...
                            </a>
                        </li>
                    </ul>
                </div>
                </body>
                <!-- ------------------------------------ -->


                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- ---------------------------------------------- -->
<?php
    $sql1 = "SELECT * FROM `doctor`";
    $result1 = mysqli_query($conn, $sql1);
    $no_doctors = mysqli_num_rows($result1);

    $sql2 = "SELECT * FROM `category`";
    $result2= mysqli_query($conn, $sql2);
    $no_category = mysqli_num_rows($result2);

    $sql3 = "SELECT * FROM `appointments`";
    $result3 = mysqli_query($conn, $sql3);
    $no_appointments = mysqli_num_rows($result3);
?>

<!-- ---------------------------------------------- -->

<!-- Options Bar -->
<div class="nav-scroller bg-body shadow-sm">
    <nav class="nav" aria-label="Secondary navigation">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="#">
            Friends
            <span class="badge text-bg-light rounded-pill align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="doctor/_all_dr_cards_POST.php">Doctors<span
                class="badge text-bg-light rounded-pill align-text-bottom"><?php echo $no_doctors;?></span></a>
        <a class="nav-link" href="category/_all_category.php">Catergories<span
                class="badge text-bg-light rounded-pill align-text-bottom"><?php echo $no_category;?></span></a>
        <a class="nav-link" href="appointment/_all_appointments.php">Appointments<span
                class="badge text-bg-light rounded-pill align-text-bottom"><?php echo $no_appointments;?></span></a>
        <a class="nav-link" href="partials/_notification.php">Notifications<span
                class="badge text-bg-light rounded-pill align-text-bottom">6</span></a>
        <a class="nav-link" href="partials/_contact_us.php">Contact Us</a>
        <a class="nav-link" href="partials/_news.php">News Feed</a>
    </nav>
</div>
</body>

</html>