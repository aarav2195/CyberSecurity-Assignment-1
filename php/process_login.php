<?php

$username = $_POST['username'];
$password = $_POST['password'];

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Login Result</title>

        <link rel="stylesheet" href="../css/style.css">

    </head>

    <body>

        <div class="container">

            <h1>Login Result</h1>

            <?php

            if($username=="admin" && $password=="admin123")
            {
                echo "<h2 style='color:green;'>Login Successful</h2>";
            }
            else
            {
                echo "<h2 style='color:red;'>Invalid Username or Password</h2>";
            }

            ?>

        </div>

    </body>

</html>