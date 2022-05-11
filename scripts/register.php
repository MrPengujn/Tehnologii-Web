<?php session_start();
$_SESSION['errors'] = false;

if (count($_POST)){

    $userList = file_get_contents('../data/users.json');
    $userArray = json_decode($userList);

    $uname = isset($_POST['uname']) ? $_POST['uname'] : '';
    $mpassword = isset($_POST['password']) ? $_POST['password'] : '';

    foreach($userArray as $value){
        
        if($value->uname == $uname){
            $_SESSION['errors'] = true;
            $_SESSION['query_result'] = 'Username already exists!';
            header("Location: ../pages/authR.php");
            break;
        }
    }
    
    if($_SESSION['errors'] == false){
        $userArray[] = ['uname' => $uname, 'pass' => $mpassword];
        $userList = json_encode($userArray);
        file_put_contents('../data/users.json', $userList);
        echo "<script>alert('Signed up successfully, log in now');document.location='../pages/auth.php';</script>";
    }
}
?>