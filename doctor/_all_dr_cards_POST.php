<!-- image size must be of 5184 * 3456 -->
<?php
include '../partials/_connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    .card-box {
        padding: 5px;
        border-radius: 3px;
        margin-bottom: 10px;
        background-color: #f0f1f5;
    }

    .thumb-lg {
        /* height: 500px; */
        width: 250px;
    }

    .img-thumbnail {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
    }

    .text-pink {
        color: #ff679b !important;
    }

    .btn-rounded {
        border-radius: 2em;
    }

    .text-muted {
        color: #98a6ad !important;
    }

    h4 {
        line-height: 22px;
        font-size: 18px;
    }
    </style>
</head>

<body>
    <?php
include '../nav/_nav.php';
?>

    <!-- Our Doctors -->
    <div class="container px-4 pt-4 d-flex justify-content-center" id="icon-grid">
        <h2 class="pb-2 border-bottom">
            <-- Specialities -->
        </h2>
    </div>

    <!-- Search Doctors -->
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div id="custom-search-input">
                    <form action="/doctorX/doctor/_all_dr_cards_POST.php" method="POST">
                        <div class="d-flex flex-row justify-content-center">
                            <input type="text" class="form-control input-lg" name="myCategory" placeholder="Search" />
                            <button class="btn btn-primary" type="submit">
                                search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </div>


    <!-- All Doctors -->
    <div class="content my-4">
        <div class="container">
            <!-- end row -->
            <div class="row">

                <?php
// Show this is search box is clicked
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dr_category = strtolower($_POST['myCategory']);

    $sql = "SELECT * FROM `doctor` WHERE dr_category='$dr_category'";
    $result = mysqli_query($conn, $sql);
    $rowNO = mysqli_num_rows($result);
    // echo $rowNO;

    while ($row = mysqli_fetch_assoc($result)) {
        echo
            '<div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="../images/dr_images/' . $row['dr_email'] . '.jpg"
                                    class="img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>' . $row['dr_name'] . '</h4>
                                <p class="text-muted">' . $row['dr_location'] . ' <span>| </span> <span><a href="#"
                                            class="text-pink">@' . $row['dr_category'] . '</a></span></p>
                            </div>

                            <div class="d-flex flex-row justify-content-center">
                            <span><object data="../svg/svg-phone.svg" width="32" height="32"> </object></span>
                            <span class="px-1">' . $row['dr_phone'] . '</span>
                            </div>


                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Book Appointment</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4><object data="../svg/svg-category.svg" width="32" height="32"> </object></h4>
                                            <p class="mb-0 text-muted">' . $row['dr_category'] . '</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4><object data="../svg/svg-location.svg" width="32" height="32"> </object></h4>
                                            <p class="mb-0 text-muted">' . $row['dr_sublocation'] . '</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4><object data="../svg/svg-time.svg" width="32" height="32"> </object></h4>
                                            <p class="mb-0 text-muted">' . $row['dr_working_time'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    }
}

// default condition
else {
    $sql = "SELECT * FROM `doctor`";
    $result = mysqli_query($conn, $sql);
    $rowNO = mysqli_num_rows($result);
    // echo $rowNO;

    while ($row = mysqli_fetch_assoc($result)) {
        echo
            '<div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="../images/dr_images/' . $row['dr_email'] . '.jpg"
                                    class="img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>' . $row['dr_name'] . '</h4>
                                <p class="text-muted">' . $row['dr_location'] . ' <span>| </span> <span><a href="#"
                                            class="text-pink">@' . $row['dr_category'] . '</a></span></p>
                            </div>

                            <div class="d-flex flex-row justify-content-center">
                            <span><object data="../svg/svg-phone.svg" width="32" height="32"> </object></span>
                            <span class="px-1">' . $row['dr_phone'] . '</span>
                            </div>


                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Book Appointment</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4><object data="../svg/svg-category.svg" width="32" height="32"> </object></h4>
                                            <p class="mb-0 text-muted">' . $row['dr_category'] . '</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4><object data="../svg/svg-location.svg" width="32" height="32"> </object></h4>
                                            <p class="mb-0 text-muted">' . $row['dr_sublocation'] . '</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4><object data="../svg/svg-time.svg" width="32" height="32"> </object></h4>
                                            <p class="mb-0 text-muted">' . $row['dr_working_time'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    }
}
?>
            </div>
        </div>
    </div>


</html>