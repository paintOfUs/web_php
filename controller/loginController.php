<?php
require_once('../config.php');
require_once (DAO_PATH .'UserDAO.php');
session_start();
$email = $_POST["email"];
$pass = $_POST["password"];

if ($email != null and $pass != null){
    $obj = new UserDAO();
    $user = $obj->checkUser($email);
    if($user==null){
        $_SESSION["error"] = "sai email";
        //header("location: ".BASE_URL.'loginForm.php');
        //exit;
    }else if($user->getUserPwd()!=$pass) {
        $_SESSION["error"] = "sai mật khẩu";
        header("location: ".BASE_URL.'loginForm.php');
        exit;
    }else{
        $_SESSION["error"] = null;
        header("location: ".BASE_URL);
        exit;
    }
}else{
    $_SESSION["error"] = "chưa điền thông tin";
    header("location: ".BASE_URL.'loginForm.php');
    exit;
}



?>