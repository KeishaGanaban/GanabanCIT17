<?php
if (isset($_GET['id'])) {
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM Students WHERE StudentId='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Whomp whomp";
    header("Location:ViewStudent.php");
}else{
    die("Nah I'm good");
}
}else{
    echo "Whoopsies";
}
?>