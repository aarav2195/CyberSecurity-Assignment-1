<?php

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$age = $_POST['age'];

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Registration Successful</title>

        <link rel="stylesheet" href="../css/style.css">

    </head>

    <body>

        <div class="container">

            <h1>Student Details</h1>

            <table>

                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>

                <tr>
                    <td>Name</td>
                    <td><?php echo $name; ?></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                </tr>

                <tr>
                    <td>Course</td>
                    <td><?php echo $course; ?></td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td><?php echo $age; ?></td>
                </tr>

            </table>

        </div>

    </body>

</html>