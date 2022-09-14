<?php
    include '../partials/_connect.php';
?>
<?php
    $dr_index = $_GET['dr_index'];
    // echo $dr_index;

    // deleting data in db
    $sql = "DELETE FROM `appointments` WHERE dr_index='$dr_index'";
    $result = mysqli_query($conn,$sql);

    // checking insertion condition
    if (!$result) {
        // echo "cannot be deleted";
    } else {
        echo
        "<script>
            window.location.assign('_all_appointments.php');
        </script>";
    }
?>