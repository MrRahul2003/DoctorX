<?php
include 'partials/_connect.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myName = strtolower($_POST['myName']);
    
    $sql = "SELECT * FROM `tp` WHERE name1='$myName' || name2='$myName' || name3='$myName'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Successful";
    }
    else{
        echo "not Successful";
    }
    $rowNO = mysqli_num_rows($result);
    echo $rowNO;

    $row = mysqli_fetch_assoc($result);
    echo $row['id'];
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <!-- Search Doctors -->
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div id="custom-search-input">
                    <form action="/doctorX/tp.php" method="POST">
                        <div class="d-flex flex-row justify-content-center">
                            <input type="text" class="form-control input-lg" name="myName" placeholder="Search" />
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
</body>

</html>