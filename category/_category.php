<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Category</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container px-4 py-5 d-flex flex-row justify-content-center" id="icon-grid">
        <a href="category/_all_category.php" style="text-decoration:none">
            <h2 class="pb-2 border-bottom">
                <-- Catergories -->
            </h2>
        </a>
    </div>
    <div class="container">
        <div class="row row-cols-3 row-cols-md-6">
            <div class="col text-center">
                <a class="nav-link bcontent" href="doctor/_all_dr_cards_GET.php?dr_category='dentist'">
                    <img src="svg/svg-dental.svg" width="80" height="80" alt="" />
                    <br>
                    <small>Dentist</small>
                </a>
            </div>

            <div class="col text-center">
                <a class="nav-link bcontent" href="doctor/_all_dr_cards_GET.php?dr_category='audiologist'">
                    <img src="svg/svg-audiologist.svg" class="rounded-circle" width="80" height="80" alt="" />
                    <br>
                    <small>Audiologist</small>
                </a>
            </div>

            <div class="col text-center">
                <a class="nav-link bcontent" href="doctor/_all_dr_cards_GET.php?dr_category='pharmacist'">
                    <img src="svg/svg-pharmacist.svg" width="80" height="80" alt="" />
                    <br>
                    <small>Pharmacist</small>
                </a>
            </div>

            <div class="col text-center">
                <a class="nav-link bcontent" href="doctor/_all_dr_cards_GET.php?dr_category='surgeon'">
                    <img src="svg/svg-surgeon.svg" class="rounded-circle" width="80" height="80" alt="" />
                    <br>
                    <small>Surgeon</small>
                </a>
            </div>

            <div class="col text-center">
                <a class="nav-link bcontent" href="doctor/_all_dr_cards_GET.php?dr_category='neurologist'">
                    <img src="svg/svg-neurologist.svg" class="rounded-circle" width="80" height="80" alt="" />
                    <br>
                    <small>Neurologist</small>
                </a>
            </div>


            <div class="col text-center">
                <!-- offcanvas trigger button -->
                <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#categories"
                    aria-controls="categories">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
            </div>
        </div>
    </div>


    <div class="p-3 m-0 border-0 bd-example">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="categories" aria-labelledby="categories">
            <div class="offcanvas-header">
                <h1 class="text-dark"><strong>DocterX</strong> </h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <object data="svg/svg-categories.svg" width="50" height="50"> </object>
                    <span class="fs-4">Catergories</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                <?php
                    $sql = "SELECT * FROM `category`";
                    $result = mysqli_query($conn, $sql);
                    $rowNO = mysqli_num_rows($result);
                    // echo $rowNO;
                
                    while ($row = mysqli_fetch_assoc($result)){
                    $cat_title = strtoupper($row['cat_title']);
                    echo

                    '<li class="nav-item">
                        <a href="doctor/_all_dr_cards_GET.php?dr_category='.$cat_title.'" class="nav-link link-dark" aria-current="page">
                            '.$cat_title.'
                        </a>
                    </li>';
                    }
                ?>

                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link link-dark" aria-current="page">
                            Acupuncturist
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Audiologist
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Ayurvedic Practitioner
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Chiropractor
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Diagnostician
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Homeopathic
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-dark" aria-current="page">
                            Microbiologist
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Naturopathic
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Nutritionist
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Pharmacist
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Physiotherapist
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Massage Therapist
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</body>

</html>