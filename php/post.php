<?php

$name = '';
$email = '';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title>POST Method Example</title>

    </head>

    <body>

        <h1>POST Method Example</h1>

        <form method="POST">

            <label>Name</label><br>

            <input type="text" name="name"><br><br>

            <label>Email</label><br>

            <input type="email" name="email"><br><br>

            <input type="submit" value="Submit">

        </form>

        <?php

        if($name!="")
        {
            echo "<hr>";
            echo "<h2>Submitted Data</h2>";
            echo "Name : $name <br>";
            echo "Email : $email";
        }

        ?>

    </body>

</html>