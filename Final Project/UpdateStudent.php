<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"/>
    <title>Student Update</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Student Update</h1>
            <div>
            <a href="ViewStudent.php" class="btn btn-light">Back</a>
            </div>
        </header>
        <form action="process3.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("config.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM Students WHERE StudentId=$id";
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
                    <input type="date" class="form-control" name="dob" value="<?php echo $row["DateOfBirth"]; ?>">
                </div>
                <div class="form-elemnt my-4">
                    <select name="gender" id="" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Male" <?php if($row["Gender"]=="Male"){echo "selected";} ?>>Male</option>
                        <option value="Femal" <?php if($row["Gender"]=="Female"){echo "selected";} ?>>Female</option>
                    </select>
                </div>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="courseid" placeholder="Update Course Id" value="<?php echo $row["CourseId"]; ?>">
                </div>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="phone" placeholder="Update Phone Number" value="<?php echo $row["Phone"]; ?>">
                </div>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="email" placeholder="Update Email" value="<?php echo $row["Email"]; ?>">
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <div class="form-element my-4">
                    <input type="submit" name="edit" value="Edit Student" class="btn btn-dark">
                </div>
                    <?php
                }else{
                    echo "<h3>Student does not exist</h3>";
                }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>