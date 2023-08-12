<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <?php

    ?>
    <form action="" method="post">
        <h1>Login</h1><br><br>
        <input class="input-log" type="text" name="uName" placeholder="user name"><br><br>
        <input class="input-log" type="password" name="password" placeholder="password"><br><br>
        <input type="submit"  name="login" id="" value="login" class="btn click"><br><br><br>

        <p>Don't have an account?</p>
        <input type="submit" name="newAcc" value="Create new accout" class="btn signUp">
        
    </form> 


    <?php
        if(isset($_POST['newAcc'])){
            header('location:signup.php');
        }

    ?>
    
</body>
</html>