
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Home</legend>
            <p>Wecome to homepage</p>    <br><br>
            
            <input type="submit" name="submit" value="Submit"> 
            
        </fieldset>
    </form>
</body>
</html>

<?php
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: loginCheck.php'); 
    }else if(isset($_SESSION['submit']))
    {
        header('location: loginCheck.php'); 

    }
?>





