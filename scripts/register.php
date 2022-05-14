<?php 
session_start();

if (count($_POST)){

    $flag = true;

    $userList = file_get_contents('../data/users.json');
    $userArray = json_decode($userList);

    $uname = isset($_POST['uname']) ? $_POST['uname'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    foreach($userArray as $value){
        if($value->uname == $uname){
            echo $flag;
            return;
        }
    }
    
    $userArray[] = ['uname' => $uname, 'pass' => $password];
    $userList = json_encode($userArray);
    file_put_contents('../data/users.json', $userList);
}
?>