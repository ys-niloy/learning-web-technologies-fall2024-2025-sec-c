<?php

function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    return $conn;
}

function login($username, $password){
    $conn = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count ==1 ){
        return true;
    }else{
        return false;
    }
}


function addUser($name, $companyname, $contactno, $username, $password){
    $conn = getConnection();
    $sql = "insert into user_info VALUES('{$name}', '{$companyname}', '{$contactno}', '{$username}', '{$password}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

function updateUser($name, $companyname, $contactno, $username, $password) {
    
    $conn = getConnection(); 
    $sql = "UPDATE user_info SET 
                name = '$name', 
                company_name = '$companyname', 
                contact_no = '$contactno',
                password = '$password'
            WHERE username = '{$username}'";

    if (mysqli_query($conn, $sql)) {
        return true; 
    } else {
        return false; 
    }
}

function deleteUser($id) {
    
    $conn = getConnection(); 

    $sql = "DELETE FROM users WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        return true; 
    } else {
        return false; 
    }
}

function searchUser($searchusername){
    $conn = getConnection();
    $sql = "SELECT * from user_info where username LIKE '%$searchusername%' ";

    $result = mysqli_query($conn, $sql);  
    $row = $result->fetch_assoc();  

    if($result->num_rows >0){
        return $row;
    }else{
        return false;
    }
}



?>
