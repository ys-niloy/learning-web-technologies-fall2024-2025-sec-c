<?php
    session_start();

    // require_once '../model/userModel.php'; 
    
    // $id = $_POST['id']; 
    // $new_username = $_POST['username'];
    // $new_password = $_POST['password'];
    // $new_email = $_POST['email'];
    
    // if (updateUser($id, $new_username, $new_password, $new_email)) {
    //     header("Location: ../view/userlist.php");
    // } else {
    //     echo "Could not update user info";
    // }

    require_once('../model/userModel.php');

    if (isset($_POST['userData'])) {
        $user = $_POST['userData'];
        $data = json_decode($user, true); // Decode as associative array

        if (isset($data['name'], $data['companyname'], $data['contactno'], $data['username'], $data['password'])) {
            $status = updateUser($data['name'], $data['companyname'], $data['contactno'], $data['username'], $data['password']);
            header('Location: ../view/userlist.php');
        } else {
            echo "Invalid user data.";
        }
    } else {
        echo "No user data received.";
    }
    
?>