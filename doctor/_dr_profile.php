<?php
include '../partials/_connect.php';
?>
<?php
// Show this is search box is clicked

    $dr_index = $_GET['dr_index'];

    $sql = "SELECT * FROM `doctor` WHERE dr_index = '$dr_index'";
    $result = mysqli_query($conn, $sql);
    $rowNO = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result)
    // echo $rowNO;
  
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dr Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    body {
        background: #f7f7ff;
        margin-top: 20px;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: .25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    }

    .me-2 {
        margin-right: .5rem !important;
    }
    </style>
</head>

<body>

<?php
include '../nav/_nav.php';
?>

    <div class="container mt-4">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <?php
                                echo
                                '<img src="../images/dr_images/' . $row['dr_email'] . '.jpg" alt="Admin"
                                    class="rounded-rectangle" width="310">
                                <div class="mt-3">
                                    <h4>' . $row['dr_name'] . '</h4>
                                    <p class="text-secondary mb-1">' . $row['dr_category'] . '</p>
                                    <a href="" class="btn btn-info btn-outline-primary text-light">Book Now!</a>
                                </div>';
                                ?>
                            </div>
                            <hr class="my-4">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap">
                                    <object data="../svg/svg-git.svg" class="mx-2" width="32" height="32"> </object>
                                    <span class="text-secondary-bold ">- Git-Hub</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap">
                                    <object data="../svg/svg-instagram.svg" class="mx-2" width="32" height="32">
                                    </object>
                                    <span class="text-secondary-bold ">- Instagram</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap">
                                    <object data="../svg/svg-facebook.svg" class="mx-2" width="32" height="32">
                                    </object>
                                    <span class="text-secondary-bold ">- Facebook</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap">
                                    <object data="../svg/svg-linkedin.svg" class="mx-2" width="32" height="32">
                                    </object>
                                    <span class="text-secondary-bold ">- Linkedin</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Profile :</h5>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0">Full Name - </h5>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <h5>
                                        <div><?php echo $row['dr_name']; ?></div>
                                    </h5>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0">Email - </h5>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <h5>
                                        <div><?php echo $row['dr_email']; ?></div>
                                    </h5>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0">Phone - </h5>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <h5>
                                        <div><?php echo $row['dr_phone']; ?></div>
                                    </h5>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0">Degree - </h5>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <h5>
                                        <div><?php echo $row['dr_education']; ?></div>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Hospital : </h5>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0">Hospital Name - </h5>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <h5>
                                        <div><?php echo $row['dr_hospital_name']; ?></div>
                                    </h5>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0">Location - </h5>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <h5>
                                        <div><?php echo $row['dr_location']; echo " / "; echo $row['dr_sublocation']; ?>
                                        </div>
                                    </h5>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0">Category - </h5>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <h5>
                                        <div><?php echo $row['dr_category']; ?></div>
                                    </h5>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0">Hospital Address - </h5>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <h5>
                                        <div><?php echo $row['dr_hospital_address']; ?></div>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center mb-3">Doctor's Status</h5>
                                    <p>World Ranking</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>India Ranking</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Mahaarashtra Ranking</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Patient's Rating</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>