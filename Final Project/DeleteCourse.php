<?php
if (isset($_GET['id'])) {
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM Course WHERE CourseId='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Course is gone :D";
    header("Location:ViewCourse.php");
}else{
    die("Nah I'm good");
}
}else{
    echo "Whoopsies";
}
?>