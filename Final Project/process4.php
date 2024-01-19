<?php
include('config.php');
if (isset($_POST["create"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $courseid = mysqli_real_escape_string($conn, $_POST["courseid"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);

    $sqlInsert = "INSERT INTO Instructor (InstructorId, FirstName, LastName, CourseId, Email, Phone) 
    VALUES ($id, '$firstname', '$lastname', '$courseid','$email','$phone')";

    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Instructor added";
        header("Location:ViewInstructor.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $courseid = mysqli_real_escape_string($conn, $_POST["courseid"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);

    $sqlUpdate = "UPDATE Instructor SET InstructorId = '$id', FirstName = '$firstname',
    LastName = '$lastname', CourseId = '$courseid', Email = '$email', 
    Phone = '$phone' WHERE InstructorId='$id'";

    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Saved Changes";
        header("Location:ViewInstructor.php");
    }else{
        die("Something went wrong");
    }
}
?>