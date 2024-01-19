<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"/>
    <title>User Update</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>User Update</h1>
            <div>
            <a href="ViewUser.php" class="btn btn-light">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("config.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM Users WHERE UserId=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="firstname" placeholder="Update First Name" value="<?php echo $row["FirstName"]; ?>">
                </div>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="lastname" placeholder="Update Last Name" value="<?php echo $row["LastName"]; ?>">
                </div>
                <div class="form-elemnt my-4">
                    <select name="role" id="" class="form-control">
                        <option value="">Select Role</option>
                        <option value="Instructor" <?php if($row["Role"]=="Instructor"){echo "selected";} ?>>Instructor</option>
                        <option value="Student" <?php if($row["Role"]=="Student"){echo "selected";} ?>>Student</option>
                    </select>
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <div class="form-element my-4">
                    <input type="submit" name="edit" value="Edit User" class="btn btn-dark">
                </div>
                    <?php
                }else{
                    echo "<h3>User does not exist</h3>";
                }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>