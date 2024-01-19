<?php
if (isset($_GET['id'])) {
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM Enrollment WHERE EnrollmentId='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = ":0";
    header("Location:ViewEnrollment.php");
}else{
    die("Nah I'm good");
}
}else{
    echo "Whoopsies";
}
?>