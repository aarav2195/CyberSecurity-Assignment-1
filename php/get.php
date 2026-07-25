<?php
$name = $_GET['name'] ?? '';
$course = $_GET['course'] ?? '';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>GET Method Example</title>
    </head>
    <body>

        <h1>GET Method Example</h1>

        <form method="GET">

            <label>Name</label><br>
            <input type="text" name="name"><br><br>

            <label>Course</label><br>
            <input type="text" name="course"><br><br>

            <input type="submit" value="Submit">

        </form>

        <?php

        if($name!="")
        {
            echo "<hr>";
            echo "<h2>Submitted Data</h2>";
            echo "Name : $name <br>";
            echo "Course : $course";
        }

        ?>

    </body>
</html>