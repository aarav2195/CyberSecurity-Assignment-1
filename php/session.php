<?php

session_start();

$_SESSION["username"]="Aarav Shah";
$_SESSION["course"]="Cyber Security";

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Session Example</title>

        <link rel="stylesheet" href="../css/style.css">

    </head>

    <body>

        <div class="container">

            <h1>Session Example</h1>

            <?php

            echo "<p>Name : ".$_SESSION["username"]."</p>";

            echo "<p>Course : ".$_SESSION["course"]."</p>";

            ?>

        </div>

    </body>

</html>