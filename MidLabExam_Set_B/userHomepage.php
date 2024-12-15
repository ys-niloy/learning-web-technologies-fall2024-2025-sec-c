<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Homepage</title>
</head>
<body>
    <h1 align="center">Welcome <?php echo $_SESSION['name']; ?></h1>

    <fieldset align="center">
        <a href="userProfile.php" align="center">User Profile</a> <br>
        <a href="changePassword.php" align="center">Change Password</a> <br>
        <a href="logout.php" align="center">Logout</a> <br>
    </fieldset>
    
</body>
</html>