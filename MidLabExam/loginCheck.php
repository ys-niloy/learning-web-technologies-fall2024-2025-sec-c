<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Login</legend>
            <input type="text" name="username" value="">        
            <input type="password" name="password" value="">
            <input type="submit" name="submit" value="Submit">  submit    
        </fieldset>
    </form>
</body>
</html>







<?php
    session_start();    
    $name = $_SESSION['std'][0];
    $email = $_SESSION['std'][1];
    $gender = $_SESSION['std'][2];
    $bloodGroup = $_SESSION['std'][3];
    $degree = $_SESSION['std'][4];
    $password = $_SESSION['std'][5];

    if(isset($_POST["submit"])){
        if($name == $_POST['username'] && $password == $_POST['password']){
            $_SESSION['status'] = true;
            header("Location: homePage.php");
           
        }
        else{
             echo"Username or password do not match";
        }
    }
    
    

    
?>