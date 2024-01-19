<?php
include('config.php');
if (isset($_POST["create"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $coursename = mysqli_real_escape_string($conn, $_POST["coursename"]);
    $credits = mysqli_real_escape_string($conn, $_POST["credits"]);
    $sqlInsert = "INSERT INTO Course (CourseId, CourseName, Credits) VALUES ($id, '$coursename', '$credits')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Course added";
        header("Location:ViewCourse.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $coursename = mysqli_real_escape_string($conn, $_POST["coursename"]);
    $credits = mysqli_real_escape_string($conn, $_POST["credits"]);
    $sqlUpdate = "UPDATE Course SET CourseId = '$id', CourseName = '$coursename', Credits = '$credits' WHERE CourseId='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Saved Changes";
        header("Location:ViewCourse.php");
    }else{
        die("Something went wrong");
    }
}
?>