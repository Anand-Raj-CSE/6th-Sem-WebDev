
<html>
    <head>
        <title>PHP Form</title>
    </head>
    <body>
        <?php echo"This is assignment.";?>
        <form method="GET" action="index.php">
         Name : <input type="text" name="var2"><br>
        Email : <input type="email" name="var3" required><br>
        <!-- Password : <input type="password" name="password" minlength="5"><br> -->
        Birthday : <input type = "date" name="var4"><br>
        Gender:<br>
        <input type="radio" name="Gender">Male<br>
        <input type="radio" name="Gender">Female<br>
        <input type="radio" name="Gender">Other<br>
        Contact : <input type="number" name="var5" required> <br>
        City : <input type="text" name="City" required> <br>
        Course : <input type="text" name="var6" required> <br>
        Interests :<br> 
        <input type="checkbox" name="interest">Any Sport<br>
        <input type="checkbox" name="interest">Reading<br>
        <input type="checkbox" name="interest">Programming<br>
        <input type="checkbox" name="interest">DANCING<br>
        <input type="checkbox" name="interest">MUSIC<br>
        <input type="submit" value="Submit" name="Submit">
        <input type="reset">
    </form>
    </body>
</html>

<?php
// if(isset($_GET["Submit"])){
    // $first_name = $_GET['var1'];
    // echo"Your first name is : $first_name<br>";
    // $second_name = $_GET['var2'] ;
    // echo"Your second name is : $second_name<br>";
    // $email = $_GET["var3"];
    // echo"Your email is : $email<br>";
    // $Birthday = $_GET["var4"];
    // echo"Your birthday is : $Birthday.<br>";
    // $contact = $_GET["var5"];
    // echo"Your contact no. is : $contact.<br>";
    // $course = $_GET["var6"];
    // echo"Your Course is : $Course.<br>";
    // $Interest = $_GET["var7"];
    // echo"Your Interest is : $Interest.<br>";
    if(strlen($_GET['var5']!=10))
    {
        echo"Invalid Number length.<br>";
    }
// else{
//         echo"No Input Provided . <br>";
//     }
?>

    <html>
        <body>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>City</th>
                    <th>Course</th>
                    <th>Interest</th>
                </tr>
                <tr>
                    <td><?php echo $_GET['var2'];?></td>
                    <td><?php echo $_GET['var3'];?></td>
                    <td><?php echo $_GET['var5'];?></td>
                    <td><?php echo $_GET['City'];?></td>
                    <td><?php echo $_GET['var6'];?></td>
                    <td><?php echo $_GET['interest'];?></td>
                </tr>
            </table>
        </body>
    </html>
