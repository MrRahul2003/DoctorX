<?php
include '../partials/_connect.php';
?>
<?php
    $dr_index = $_GET['dr_index'];
    // echo $dr_index;

    $sql = "SELECT * FROM `doctor` WHERE dr_index = '$dr_index'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql1 = "INSERT INTO `appointments` (`login_user_id`, `dr_index`, `appointment_date_time`) VALUES ('1', '$dr_index', current_timestamp())";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1) {
        echo
        "<script>
            window.location.assign('_appointment_successful.php');
        </script>";
    }
    else {
        echo "Appointment cannot be set!";
    }
    

?>