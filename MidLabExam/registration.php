<?php
session_start();

if (isset($_POST["submit"])) {


    if (!empty($name) && !empty($email) && !empty($gender) && !empty($bloodGroup) && !empty($degree)) {
        echo "Please fillup all the fields accurately";
    } else {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $bloodGroup = $_POST["bloodGroup"];
        $degree = $_POST["degree"];

        $_SESSION['std'] = array($name, $email, $gender, $bloodGroup, $degree, $password); 

        header("Location: loginCheck.php");
        


    }
}

?>
