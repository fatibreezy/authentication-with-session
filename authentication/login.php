<?php

session_start();

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
     header("location: page-1.php");

     $_SESSION["email"] = $email;
     header("location: page-1.php");
}  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td style="background-color:orange"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
    <a href="register.php">Register</a>

</body>

</html>