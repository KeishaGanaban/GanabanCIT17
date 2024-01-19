<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ganaban";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn = new mysqli($servername, $username, $password,$dbname);

$sql1 = "CREATE TABLE Users(
    UserId INT(10) PRIMARY KEY,
    FirstName CHAR(255),
    LastName CHAR(255),
    Role CHAR(10)
    )";

if ($conn->query($sql1) === TRUE) {
    echo "Users table created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }    

  $conn = new mysqli($servername, $username, $password,$dbname);

$sql2 = "CREATE TABLE Course (
    CourseId INT(10) PRIMARY KEY,
    CourseName CHAR(255),
    Credits INT(255)
    )";

if ($conn->query($sql2) === TRUE) {
    echo "Course table created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }    

$conn = new mysqli($servername, $username, $password,$dbname);

$sql3 = "CREATE TABLE Students(
    StudentId INT(10) PRIMARY KEY,
    FirstName CHAR(255),
    LastName CHAR(255),
    DateOfBirth CHAR(255),
    Gender CHAR(6),
    CourseId INT,
    FOREIGN KEY (StudentId) REFERENCES Users(UserId),
    FOREIGN KEY (CourseId) REFERENCES Course(CourseId),
    Email CHAR(255),
    Phone INT(255)
    )";

if ($conn->query($sql3) === TRUE) {
    echo "Students table created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }    

  $conn = new mysqli($servername, $username, $password,$dbname);

$sql4 = "CREATE TABLE Instructor (
    InstructorId INT(10) PRIMARY KEY,
    FirstName CHAR(255),
    LastName CHAR(255),
    CourseId INT,
    FOREIGN KEY (InstructorId) REFERENCES Users(UserId),
    FOREIGN KEY (CourseId) REFERENCES Course(CourseId),
    Email CHAR(255),
    Phone INT(255)
    )";

if ($conn->query($sql4) === TRUE) {
    echo "Instructor table created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }    

  $conn = new mysqli($servername, $username, $password,$dbname);

$sql5 = "CREATE TABLE Enrollment (
    EnrollmentId INT(10) PRIMARY KEY,
    StudentId INT(10),
    CourseId INT(10),
    FOREIGN KEY (StudentId) REFERENCES Students(StudentId),
    FOREIGN KEY (CourseId) REFERENCES Students(CourseId),
    EnrollmentDate DATE,
    Grade INT(255)
    )";

if ($conn->query($sql5) === TRUE) {
    echo "Enrollment table created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }

$conn->close();
?>


