<?php
include '../partials/_connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"
        integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <style>
    .card {
        margin-bottom: 24px;
        box-shadow: 0 2px 3px #e4e8f0;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #eff0f2;
        border-radius: 1rem;
    }

    .avatar-md {
        height: 4rem;
        width: 4rem;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #f1f3f7;
        border: 1px solid #eff0f2;
        border-radius: 0.75rem;
    }

    .avatar-title {
        align-items: center;
        background-color: #3b76e1;
        color: #fff;
        display: flex;
        font-weight: 500;
        height: 100%;
        justify-content: center;
        width: 100%;
    }

    .bg-soft-primary {
        background-color: rgba(59, 118, 225, .25) !important;
    }

    a {
        text-decoration: none !important;
    }

    .badge-soft-danger {
        color: #f56e6e !important;
        background-color: rgba(245, 110, 110, .1);
    }

    .badge-soft-success {
        color: #63ad6f !important;
        background-color: rgba(99, 173, 111, .1);
    }


    .badge {
        display: inline-block;
        padding: 0.25em 0.6em;
        font-size: 75%;
        font-weight: 500;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.75rem;
    }
    </style>
</head>

<body>
    <?php
    include '../nav/_nav.php';
    ?>
    <?php
    $sql = "SELECT * FROM `appointments`";
    $result = mysqli_query($conn, $sql);
    $rowNO = mysqli_num_rows($result);
    // echo $rowNO;
    ?>

    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <h5 class="card-title">Appointment List <span
                            class="text-danger fw-normal ms-2">(<?php echo $rowNO; ?>)</span></h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                    <div>
                        <a href="../doctor/_all_dr_cards_POST.php" class="btn btn-primary"><i
                                class="bx bx-plus me-1"></i> Add New</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">

            <?php
                while ($row = mysqli_fetch_assoc($result))
                {
                $dr_index = $row['dr_index'];

                $sql1 = "SELECT * FROM `doctor` WHERE dr_index='$dr_index'";
                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result1);

                echo
                '<div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div><img src="../images/dr_images/' . $row1['dr_email'] . '.jpg" alt=""
                                    class="rounded-rectangle" width="180" /></div>
                            <div class="flex-1 ms-3">
                                <h3 class="font-size-16 mb-1">' . $row1['dr_name'] . '</h3>
                                <span class="badge badge-soft-success mb-0">' . $row1['dr_category'] . '</span>
                            </div>
                        </div>
                        <div class="mt-3 pt-1">
                            <p class="text-muted mb-0"><i
                                    class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> ' . $row1['dr_phone'] . '
                            </p>
                            <p class="text-muted mb-0 mt-2"><i
                                    class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i>
                                    ' . $row1['dr_email'] . '</p>
                            <p class="text-muted mb-0 mt-2"><i
                                    class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i>
                                    ' . $row1['dr_hospital_name'] . '</p>
                            <p class="text-muted mb-0 mt-2"><i
                                    class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 52
                                    ' . $row1['dr_hospital_address'] . '</p>
                        </div>
                        <div class="d-flex gap-2 pt-4">
                            <a href="../doctor/_dr_profile.php?dr_index='. $row['dr_index'] .'" class="btn btn-soft-primary btn-sm w-50">Profile</a>
                            <a href="_delete_appointment.php?dr_index='. $row['dr_index'] .'" class="btn btn-danger btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Cancel</a>
                        </div>

                    </div>
                </div>
            </div>';

                
                }
            ?>
        </div>
    </div>

</html>