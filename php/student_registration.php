<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>

        <div class="container">

            <h1>Student Registration</h1>

            <form action="process_registration.php" method="POST">

                <label>Name</label>
                <input type="text" name="name" required>

                <label>Email</label>
                <input type="email" name="email" required>

                <label>Course</label>
                <input type="text" name="course" required>

                <label>Age</label>
                <input type="number" name="age" required>

                <br><br>

                <button type="submit">Register</button>

            </form>

        </div>

    </body>
</html>