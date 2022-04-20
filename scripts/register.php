<?php session_start();
$_SESSION['errors'] = true;

if (count($_POST)){

    $userList = file_get_contents('../data/users.json');
    $userArray = json_decode($userList);

    $uname = isset($_POST['uname']) ? $_POST['uname'] : '';
    $mpassword = isset($_POST['password']) ? $_POST['password'] : '';
    $confpassword = isset($_POST['confPassword']) ? $_POST['confPassword'] : '';

    foreach($userArray as $value){

        if($value->uname == $uname){
            $_SESSION['query_result'] = 'Username already exists!';
            $_SESSION['errors'] = true;
            header("Location: ../pages/authR.php");
            break;
        }
    }

    if($mpassword != $confpassword){
        $_SESSION['query_result'] = 'Passwords don\'t mach!';
        header("Location: ../pages/authR.php");
        $_SESSION['errors'] = true;
    }

    $userArray[] = ['uname' => $uname, 'pass' => $mpassword];
    $userList = json_encode($userArray);
    file_put_contents('../data/users.json', $userList);
    $_SESSION['errors'] = false;
    header("Location: ../index.php");
}
?>