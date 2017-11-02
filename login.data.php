<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01-Nov-17
 * Time: 4:29 AM
 */

session_start();

$username=$_POST['username'];
$password=$_POST['password'];
$submit=$_POST['commit'];

if ($submit ==="Log-In"){
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    header("location: page.php?page=log-me-in") ;
}else{
    header("location:".$_SERVER['HTTP_REFERER'] );
}



