<!DOCTYPE html>
<html>
    <head>
        <title>Student Login</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>

        <div class="container">

            <h1>Student Login</h1>

            <form action="process_login.php" method="POST">

                <label>Username</label>
                <input type="text" name="username" required>

                <label>Password</label>
                <input type="password" name="password" required>

                <br><br>

                <button type="submit">Login</button>

            </form>

        </div>

    </body>
</html>