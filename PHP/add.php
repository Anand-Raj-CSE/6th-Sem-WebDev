<?php
session_start();
?>
<?php
include('config.php');
?>

<?php
    if(isset($_POST['Submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['Gender'];
        $city = $_POST['City'];

        $sql = "INSERT INTO `users` (`username`,`password`, `e-mail`, `Gender`, `City`) VALUES ('$username','123', '$email', '$gender', '$city')";
        mysqli_query($conn , $sql);
    
    }
    else{
        echo "Please click the submit button to submit data";
    }

?>

<?php
if(isset($_SESSION['username'])){
?>

<html>
<head>
<title>ADDING MORE USERS</title>
</head>
    <body>
    <?php
    if(isset($_SESSION['username'])){
    ?>
        <form method="POST" action="add.php">
        Username : <input type="text" name="username" placeholder = "Type your username" required><br>
        Email : <input type="email" name="email" placeholder = "Type your email" required><br>
        <!-- Password : <input type="password" name="password" minlength="5"><br> -->
        <!-- Birthday : <input type = "date" name="var4"><br> -->
        Gender:<br>
        <input type="radio" value = "MALE" name="Gender">Male<br>
        <input type="radio" value = "FEMALE" name="Gender">Female<br>
        <input type="radio" value = "OTHERS" name="Gender">Other<br>
        <!-- Contact : <input type="number" name="var5" required> <br> -->
        City :
    <select id="City" name="City">
    <option value="Dehradun">Dehradun</option>
    <option value="Meeruth">Meeruth</option>
    <option value="Ranchi">Ranchi</option>
    <option value="Delhi">Delhi</option>
    <option value="Haridwar">Haridwar</option>
    <option value="Varanasi">Varanasi</option>
    <option value="Lucknow">Lucknow</option>
    <option value="Prayagraj">Prayagraj</option>
    <option value="Muradabad">Muradabad</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Laksar">Laksar</option>
    <option value="Rurkee">Rurkee</option>
  </select><br>
        <input type="submit" value="Submit" name="Submit">
    </form>
    <?php
    }
    ?>
    <?php
    else{
    echo "Login as a valid user";
    ?>
    <a href = "login.php">Login</a>
    <?php
    }
    ?>

    </body>
</html>


<?php
}
?>
<?php
else{
    echo "Login as a valid user";
?>
<a href = "login.php">Login</a>
<?php
}
?>