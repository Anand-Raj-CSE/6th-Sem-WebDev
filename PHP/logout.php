<?php
session_start();
echo $_SESSION['username'];
session_unset();
session_destroy();
?>

<?php
// header("Location:details.php");
?>

<html>
    <head>
    <title>Logout Page </title>
    </head>
    <body>
    <a href = "logout.php">Logout</a>
    </body>
</html>