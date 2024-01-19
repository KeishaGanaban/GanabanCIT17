<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    <title>Create Instructor</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Register a new instructor?</h1>
            <div>
            <a href="ViewInstructor.php" class="btn btn-light">Back</a>
            </div>
        </header>
        
        <form action="process4.php" method="post">
            <div class="form-elemnt my-4">
                <label for="TextInputId" class="form-label">ID Number</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="form-elemnt my-4">
                <label for="TextInputId" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname">
            </div>
            <div class="form-element my-4">
                <label for="TextInputId" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="form-element my-4">
                <label for="TextInputId" class="form-label">CourseId</label>
                <input type="text" class="form-control" name="courseid">
            </div>
            <div class="form-element my-4">
                <label for="TextInputId" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-element my-4">
                <label for="TextInputId" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Register Instructor" class="btn btn-dark">
            </div>
        </form>
        
        
    </div>
</body>
</html>