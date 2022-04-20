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
            $_SESSION['errors'] = true;
            $_SESSION['query_result'] = 'Username already exists!';
            header("Location: ../pages/authR.php");
            break;
        }
    }

    if($mpassword != $confpassword){
        $_SESSION['errors'] = true;
        $_SESSION['query_result'] = 'Passwords don\'t mach!';
        header("Location: ../pages/authR.php");
    }

    $userArray[] = ['uname' => $uname, 'pass' => $mpassword];
    $userList = json_encode($userArray);
    file_put_contents('../data/users.json', $userList);
    $_SESSION['errors'] = false;
    echo "<script>alert('Signed in successfully, log in now');
    document.location='../pages/auth.php';</script>";
}
?>