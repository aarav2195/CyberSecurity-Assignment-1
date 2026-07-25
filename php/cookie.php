<?php

setcookie("student_name", "Aarav Shah", time() + 3600);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cookie Example</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>

        <div class="container">

            <h1>Cookie Example</h1>

            <?php

            if(isset($_COOKIE["student_name"]))
            {
                echo "<h2>Cookie Value: ".$_COOKIE["student_name"]."</h2>";
            }
            else
            {
                echo "<h2>Cookie Created. Refresh the page.</h2>";
            }

            ?>

        </div>

    </body>
</html>