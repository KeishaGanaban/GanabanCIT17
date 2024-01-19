<?php
if (isset($_GET['id'])) {
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM Instructor WHERE InstructorId='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Byebye";
    header("Location:ViewInstructor.php");
}else{
    die("Nah I'm good");
}
}else{
    echo "Whoopsies";
}
?>