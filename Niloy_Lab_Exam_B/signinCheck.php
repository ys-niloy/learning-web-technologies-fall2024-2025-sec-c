<?php
    session_start();


    if(isset($_POST["submit"])) {

       
        $id = $_REQUEST['id'];
        $password = $_REQUEST['password'];
        
        

        if($_REQUEST['id'] == null || $_REQUEST['password'] == null) {
            echo "Please fillup all the fields";
        }else{

            $users = file_get_contents("users.txt");
            $userInfo = explode(" ", $users);

            for($i = 0; $i<count($userInfo); $i++) { 
                if($userInfo[$i] == $id && $userInfo[$i+1] == $password){
                    $_SESSION['name'] = $userInfo[$i+2];
                    header("Location: userHomepage.php");
                }
                
                
            }

            

            // for($i = 0; $i<count($userInfo); $i++) {   
            //     if($users[$i] == $id && $users[$i+1] == $password){

            //     }
            // }
        }
    }


?>