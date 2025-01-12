<?php
    require_once "../model/userModel.php";
    $searchusername = $_REQUEST['searchusername'];

    $user = "";

    $user = searchUser($searchusername);

    if($user != null){
        $userData = ['name'=> $user['name'], 'companyname'=> $user['company_name'] , 'contactno'=> $user['contact_no'], 'username'=> $user['username'] , 'password'=> $user['password']];
        $data = json_encode($userData);
        echo $data;
    }else{
        echo 'No users found';
    }

   

   
?>