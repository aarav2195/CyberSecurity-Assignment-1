<?php

$conn = mysqli_connect("localhost", "root", "", "assignment1_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Records</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

        <div class="container">

            <h1>Student Records</h1>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Age</th>
                </tr>

                <?php

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";

                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['course']."</td>";
                    echo "<td>".$row['age']."</td>";

                    echo "</tr>";
                }

                ?>

            </table>

        </div>

    </body>
</html>