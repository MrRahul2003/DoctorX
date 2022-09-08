<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    .btn {
        padding: 0.5em 1.5em;
        border-radius: 2em;
        box-shadow: 5px 5px 5px rgba(105, 73, 73, 0.15);
    }

    .my-card {
        position: absolute;
        left: 40%;
        top: -20px;
        border-radius: 50%;
    }
    </style>
</head>

<body>
    <?php
        include '_nav.php';
    ?>

    <!-- Our Doctors -->
    <div class="container px-4 py-5 d-flex justify-content-center" id="icon-grid">
        <h2 class="pb-2 border-bottom">
            <-- Hospitals -->
        </h2>
    </div>
    <div class="container my-2">
        <div class="row row-cols-2 row-cols-md-4 g-4">

            <div class="card mx-3 my-2">
                <div class="card-body d-flex flex-row">
                    <div>
                        <a class="link-dark my-0" href="https://www.instagram.com/mr_.rahul_._/">
                            <h5 class="card-title font-weight-bold my-0">Dr Pandey</h5>
                        </a>
                        <br>
                        <a class="link-dark" href="https://www.instagram.com/mr_.rahul_._/"><img
                                src="../svg/svg-location.svg" width="20" height="20"><small
                                class="card-text px-2">Kurla</small></a>
                    </div>
                </div>
                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg"
                        alt="Card image cap" />
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link link-danger p-md-1 my-1" data-mdb-toggle="collapse"
                            href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent"
                            style="text-decoration: none;">Book Appointment</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>