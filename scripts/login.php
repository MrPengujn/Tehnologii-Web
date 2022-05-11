<?php session_start();
$_SESSION['errors'] = true;

if (count($_POST)){

    $userList = file_get_contents("../data/users.json");
    $userArray = json_decode($userList);

    $uname = isset($_POST['uname']) ? $_POST['uname'] : '';
    $mpassword = isset($_POST['password']) ? $_POST['password'] : '';

    foreach($userArray as $value){

        if($value->uname == $uname && $value->pass == $mpassword){
            $_SESSION['errors'] = false;
            echo "<script>alert('Logged in successfully, welcome back $uname');
            document.location='../index.php';
            localStorage.setItem('uname','$uname');
            localStorage.setItem('loggedin','true');</script>";
            break;
        }
    }
    if($_SESSION['errors'] == true){
        header("Location: ../pages/auth.php");
    }
}
?>