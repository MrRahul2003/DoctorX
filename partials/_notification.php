<?php
    include '_connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>

    .dropdown-list-image {
        position: relative;
        height: 2.5rem;
        width: 2.5rem;
    }

    .dropdown-list-image img {
        height: 2.5rem;
        width: 2.5rem;
    }

    </style>
</head>

<body>
    <?php
    include '../nav/_nav.php';
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-9 right">
                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">All</h6>
                    </div>
                    <div class="box-body p-0">


                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                    src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" /></div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                <div class="small">Pellentesque semper ex diam, at tristique ipsum varius sed.
                                    Pellentesque non metus ullamcorper</div>
                            </div>
                        </div>


                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                    alt="" />
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div>
                                    <span class="font-weight-normal">Congratulate Mnadeep singh
                                        (iamgurdeeposahan)</span> for 4 years at Askbootsrap Pvt.
                                    <div class="small text-success"><i class="fa fa-check-circle"></i> You sent Mandeep
                                        a message</div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div
                                class="dropdown-list-image mr-3 d-flex align-items-center bg-success justify-content-center rounded-circle text-white">
                                M</div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: MONDAY</div>
                                <div class="small">Nunc purus metus, aliquam vitae venenatis sit amet, porta non est.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>