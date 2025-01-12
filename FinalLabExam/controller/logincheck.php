<?php 
    session_start();
    require_once('../model/userModel.php');

    if(isset($_REQUEST['submit'])){
        

        if($username == null || empty($password)){
            echo "Null username/password";
        }else{
            
            $status = login($username, $password);
            if($status){
                setcookie('status', 'true', time()+3600, '/');
                $_SESSION['username'] = $username;
                header('location: ../view/home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        //echo "invalid request!";
        header('location: ../view/login.html');
    }

?>