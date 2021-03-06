<?php
session_start()

?>

<html>
<head>
    <title>Register</title>
</head>
<body>
    <br>
    <form action="register.php" method="post" name="form1">
        <table width="35%">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" required></td>
            </tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td style="background-color:orange"><input type="submit" name="register" value="Register"></td>
            </tr>
        </table>
        <a href="login.php">Login</a>

        <?php
       

        // Check If form submitted, insert user data into database.
        if (isset($_POST['name'])  &&  isset($_POST['email']) ) {
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            $Username  = $_POST['Username'];
            $password = $_POST['password'];
            $register =$_POST['register']; 
            echo  "<h3>Account Created <br>You can now log in to your account</h3>";
        }

        ?>
    </form>
</body>

</html>