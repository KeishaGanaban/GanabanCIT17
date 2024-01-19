<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"/>
    <title>User Table</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>User List</h1>
            <div>
                <a href="CreateUser.php" class="btn btn-info">Add New User</a>
                <a href="index.php" class="btn btn-light">Back</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table class="table table-dark">
        <thead>
            <tr>
                <th>ID#</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Role</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('config.php');
        $sqlSelect = "SELECT * FROM Users";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['UserId']; ?></td>
                <td><?php echo $data['LastName']; ?></td>
                <td><?php echo $data['FirstName']; ?></td>
                <td><?php echo $data['Role']; ?></td>
                <td>
                    <a href="UpdateUser.php?id=<?php echo $data['UserId']; ?>" class="btn btn-secondary">Edit</a>
                    <a href="DeleteUser.php?id=<?php echo $data['UserId']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>