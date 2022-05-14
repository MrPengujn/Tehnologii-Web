<?php 
session_start();

if (count($_POST)){

    $flag = true;

    $userList = file_get_contents("../data/users.json");
    $userArray = json_decode($userList);

    $uname = isset($_POST['uname']) ? $_POST['uname'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    foreach($userArray as $value){
        if($value->uname == $uname && $value->pass == $password){
            $flag = false;
            return;
        }
    }
    
    echo $flag;
}
?>