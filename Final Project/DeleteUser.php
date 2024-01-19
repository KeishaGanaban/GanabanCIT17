<?php
if (isset($_GET['id'])) {
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM Users WHERE UserId='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "User is gone :(";
    header("Location:ViewUser.php");
}else{
    die("Nah I'm good");
}
}else{
    echo "Whoopsies";
}
?>