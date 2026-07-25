<?php

$conn = mysqli_connect("localhost","root","","assignment1_db");

if(!$conn)
{
    die("Connection Failed");
}

$sql = "INSERT INTO students(name,email,course,age)
VALUES('Riya Sharma','riya@example.com','Cyber Security',20)";

if(mysqli_query($conn,$sql))
{
    echo "<h2>Student inserted successfully.</h2>";
}
else
{
    echo "Error: ".mysqli_error($conn);
}

mysqli_close($conn);

?>