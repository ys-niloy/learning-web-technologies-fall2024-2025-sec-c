<?php
    session_start();
    require_once('../model/userModel.php');

    // if(!isset($_COOKIE['status'])){
    //     header('location: login.html'); 
    // }

    if (isset($_REQUEST['id'])){
        echo $_REQUEST['id'];
    }

    $conn = getConnection();

    if (!$conn) {
        die("Connection failed: ");
    }


    $username = $_REQUEST['username'];          //retrieving id from userlist page

    $sql = "SELECT * FROM user_info WHERE username = '$username' ";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        
        $contactno = $row['contact_no'];
        $companyname = $row['company_name'];
        $password = $row['password'];
        $name = $row['name'];
    }


?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
        <h2>Edit User</h2>
        <a href='home.php'>Back </a> |
        <a href='../controller/logout.php'>logout </a>
        <br>
        <form method="post" action="" enctype="" onsubmit="return updateUserAjax()">
            <input type="hidden" name="username" value="<?=$username?>">    

            Name <input type="text" name="name" value="<?=$name?>"  onblur="nameValidate()" /> <br>
            Company Name <input type="text" name="companyname" value="<?=$companyname?>" onblur="companynameValidate()" /> <br>
            Contact No <input type="text" name="contactno" value="<?=$contactno?>" onblur="contactnoValidate()" /> <br>
            Password <input type="password" name="password" value="<?=$password?>" onblur="passwordValidate()" /> <br>
            <input type="submit" name="submit" value="Update" />
        </form>

        <p id="msg"> Warning Message</p>

        <script src="../asset/js/updateUser.js"></script>
</body>
</html>
