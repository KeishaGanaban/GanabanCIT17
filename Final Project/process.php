<?php
include('config.php');
if (isset($_POST["create"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $role = mysqli_real_escape_string($conn, $_POST["role"]);
    $sqlInsert = "INSERT INTO Users (UserId, FirstName, LastName, Role) VALUES ($id, '$firstname', '$lastname', '$role')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "User added";
        header("Location:ViewUser.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $role = mysqli_real_escape_string($conn, $_POST["role"]);
    $sqlUpdate = "UPDATE Users SET UserId = '$id', FirstName = '$firstname', LastName = '$lastname', Role = '$role' WHERE UserId='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Saved Changes";
        header("Location:ViewUser.php");
    }else{
        die("Something went wrong");
    }
}
?>