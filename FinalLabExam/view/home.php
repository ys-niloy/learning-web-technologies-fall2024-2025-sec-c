<?php
    session_start();
    // if(!isset($_COOKIE['status'])){
    //     header('location: login.html');  
    // }
?>


<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h1> Done By 22-46206-1 </h1>
        <!-- <h1>Welcome Home! <?=$_SESSION['username']?></h1>     -->
        <h1>Welcome Home!</h1> 
        <a href="userlist.php"> View All Users </a> | 
        <a href="searchUser.html"> Search A User </a> | 
        <a href="../controller/logout.php"> logout </a>
</body>
</html>
