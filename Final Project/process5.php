<?php
include('config.php');
if (isset($_POST["create"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $studentid = mysqli_real_escape_string($conn, $_POST["studentid"]);
    $courseid = mysqli_real_escape_string($conn, $_POST["courseid"]);
    $ed = mysqli_real_escape_string($conn, $_POST["ed"]);
    $grade = mysqli_real_escape_string($conn, $_POST["grade"]);

    $sqlInsert = "INSERT INTO Enrollment (EnrollmentId, StudentId, CourseId, EnrollmentDate, Grade) 
    VALUES ($id, '$studentid','$courseid','$ed','$grade')";

    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Enrollee added";
        header("Location:ViewEnrollment.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $studentid = mysqli_real_escape_string($conn, $_POST["studentid"]);
    $courseid = mysqli_real_escape_string($conn, $_POST["courseid"]);
    $ed = mysqli_real_escape_string($conn, $_POST["ed"]);
    $grade = mysqli_real_escape_string($conn, $_POST["grade"]);

    $sqlUpdate = "UPDATE Enrollment SET EnrollmentId = '$id', StudentId = '$studentid', CourseId = '$courseid',
    EnrollmentDate = '$ed', Grade = '$grade' WHERE EnrollmentId='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Saved Changes";
        header("Location:ViewEnrollment.php");
    }else{
        die("Something went wrong");
    }
}
?>