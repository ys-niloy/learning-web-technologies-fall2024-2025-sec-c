<?php
    session_start();


    if(isset($_POST["submit"])) {

       
        $id = $_REQUEST['id'];
        $password = $_REQUEST['password'];
        $confirm = $_REQUEST['confirm'];
        $name = $_REQUEST['name'];
        $usertype = $_REQUEST['usertype'];
        

        if($_REQUEST['id'] == null || $_REQUEST['password'] == null || $_REQUEST['confirm'] == null || $_REQUEST['name'] == null || $_POST['usertype'] == null) {
            echo "Please fillup all the fields";
            
        }else if($_REQUEST['password'] != $_REQUEST['confirm']){
            echo 'Passwords do not match';
        }else if($usertype == "user"){
            
            $userFile = fopen("users.txt", "a") or die("Unable to open file!");
            
            fwrite($userFile, $id." ");
            fwrite($userFile, $password." ");
            fwrite($userFile, $name." ");
            fwrite($userFile, $usertype." ");
            fclose($userFile);
            
            header("Location: signin.html");
        }
        

        

        
    }

    
    
    
?>