<?php
session_start();
?>

<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$pass'";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0)
    {
        echo nl2br("user Exists.\n");
        $_SESSION['username']="$username";
        header("Location:details.php");
    }
    else
    {
        echo "User Does Not Exist";
    }

}
?>

<html>
    <head>
    <title>Login Page </title>
    </head>
    <body>
    <form method="POST" action="login.php">
    USERNAME <input type ="text" name = "username" placeholder="Type your username" required><br>
    PASSWORD <input type="password" name="password" placeholder="Type your password" required><br>
    <input type="submit" name="submit" value="Login">
    </form>
    </body>
</html>