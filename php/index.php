<?php

include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    include_once '../form1.html';
}else if(isset($_POST['username']) && isset($_POST['password'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once '../form1.html';
    }else{
        $errorLogin = "Nombre de usuario y/o password es incorrecto";
        include_once 'Loginp.php';
    }

}else{
    include_once 'Loginp.php';
}


?>
