<?php
include('config.php');
if (isset($_POST["create"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $courseid = mysqli_real_escape_string($conn, $_POST["courseid"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);

    $sqlInsert = "INSERT INTO Students (StudentId, FirstName, LastName, DateOfBirth, Gender, CourseId, Email, Phone) 
    VALUES ($id, '$firstname', '$lastname', '$dob','$gender','$courseid','$email','$phone')";

    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Student added";
        header("Location:ViewStudent.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $courseid = mysqli_real_escape_string($conn, $_POST["courseid"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);

    $sqlUpdate = "UPDATE Students SET StudentId = '$id', FirstName = '$firstname',
    LastName = '$lastname', DateOfBirth = '$dob', Gender = '$gender', CourseId = '$courseid',
    Email = '$email', Phone = '$phone' WHERE StudentId='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Saved Changes";
        header("Location:ViewStudent.php");
    }else{
        die("Something went wrong");
    }
}
?>