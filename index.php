<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
* {
    box-sizing: border-box;
}

h1 {
    text-shadow: 1px 1px 2px #7c7c7c;
}

.btn {
    padding: 0.5em 1.5em;
    border-radius: 2em;
    box-shadow: 5px 5px 5px rgba(105, 73, 73, 0.15);
}

@media screen and (max-width: 567px) {
    .banner {
        text-align: center;
    }
}
</style>

<body>
<?php
    include 'partials/_connect.php';
?>

    <?php
include 'nav/_nav_index.php';
?>

    <!-- Coursel -->
    <div class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark"
        style="height:100vh; background-size: cover; background-image: url(images/coursel.jpg);">

        <div class="container-fluid">
            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
                <div class="col-12 col-md-8  h-50 ">
                    <h1 class="display-2  text-light mb-2 mt-5"><strong>DocterX</strong> </h1>
                    <p class="lead  text-light mb-5">Save time by sheduling appointment online, plus get seamless
                        integrations with online booking, dispatching and more.</p>
                    <p>
                    <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">

                            <form class="d-flex flex-row ">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                    aria-label="Search">&nbsp;
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">location</button>
                            </form>

                        </div>
                    </div>
                    </p>
                    <div class="btn-container-wrapper p-relative d-block  zindex-1">
                        <a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light"
                            href="http://bootstraptor.com">
                            <i class="fa fa-angle-down fa-4x text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include 'category/_category.php';
?>

    <!-- Banner 2 -->
    <div class="banner my-5" style="background-color: #f8d49d; width: 100%; padding: 2em 0;">
        <div class="container">
            <div class="row style=" align-items:center;"">
                <div class="col-sm-5">
                    <h1 class="display-4 fw-bold">DocterX</h1>
                    <p>Jyada soch mat ye project pura ni hua hai.</p>
                    <button class="btn btn-success">Learn More</button>
                </div>
                <div class="col-sm-7">
                    <img class="img-fluid" src="..." alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 d-flex flex-row justify-content-center">
        <div class="footer">
            <img src="https://image.ibb.co/cbCMvA/logo.png" />
        </div>
    </div>

    <!-- --------------------------------------------------------------------------- -->

    <!-- Banner 3 -->
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">


                <img src="images/doctor1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="150%"
                    height="500" loading="lazy">


            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Role of the Doctor.</h1>
                <p class="lead">Doctor, the most important person in society. He treats people suffering from one or
                    many diseases. The doctor has a profound knowledge of various illnesses and their best
                    treatment.
                    All the doctors work for making society fit, healthy and happy</p>
            </div>
        </div>
    </div>

    <?php
include 'partials/_team.php';
include 'partials/_footer.php';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>