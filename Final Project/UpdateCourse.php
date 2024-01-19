<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"/>
    <title>Course Update</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Course Update</h1>
            <div>
            <a href="ViewCourse.php" class="btn btn-light">Back</a>
            </div>
        </header>
        <form action="process2.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("config.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM Course WHERE CourseId=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="coursename" placeholder="Update Course Name" value="<?php echo $row["CourseName"]; ?>">
                </div>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="credits" placeholder="Update Credits" value="<?php echo $row["Credits"]; ?>">
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <div class="form-element my-4">
                    <input type="submit" name="edit" value="Edit Course" class="btn btn-dark">
                </div>
                    <?php
                }else{
                    echo "<h3>Course does not exist</h3>";
                }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>