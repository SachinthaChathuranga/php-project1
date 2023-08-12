<?php 
    include("connectDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sign up</title>
</head>
<body>
    <form action="" method="post">
        <h1>Sign Up</h1><br><br>
        <label for="fName">First Name : </label><br>
        <input type="text" name="fName"><br><br>

        <label for="lName">Last Name : </label><br>
        <input type="text" name="lName"><br><br>
        
        <label for="email">Email : </label><br>
        <input type="email" name="email"><br><br>

        <label for="bDay">Birth Day : </label><br>
        <input type="date" name="bDay"><br><br>

        <label for="tel">Phone No. :</label><br>
        <input type="number" name="tel"><br><br>

        <label for="address">Address : </label><br>
        <input type="text" name="address"><br><br>

        <label for="password">Password : </label><br>
        <input type="password" name="password"><br><br>
        
        <input type="submit" name="signup" value="Sign Up" class="btn click"><br><br><br><br>

        <p>Already You have account?</p>
        <input type="submit" name="signIn" value="Sign In" class="btn signIp">
    </form>


    <?php
    if(isset($_POST['signup'])){
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];
        $bDay = $_POST['bDay'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        // $query1 = 'INSERT INTO `members(`id`,`fName`, `lName`, `email`, `bDay`, `tel`, `address`,`password`) VALUES (null,$fName, $lName, $email, $bDay, $tel, $address, $password)';


        $query1 = "INSERT INTO `members` (`id`, `fName`, `lName`, `email`, `bDay`, `tel`, `address`, `password`) VALUES (null,'$fName', '$lName', '$email', '$bDay', '$tel', '$address', '$password')";

        $result1 = mysqli_query($con,$query1);
        header("location:index.php");
    }

    if(isset($_POST['signIn'])){
        header('location:login.php');
    }
        
    ?>
    
</body>
</html>