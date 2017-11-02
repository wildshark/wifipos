<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 31-Oct-17
 * Time: 3:09 PM
 */

$username=$_SESSION['username'];
$password=$_SESSION['password'];

$sql="select * from get_user_profile WHERE usern='$username' and passwd='$password'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$userid=$row['userID'];
$usern= $row['usern'];
$password= $row['passwd'];

if ($usern === $username and $passwd=$password){
    $_SESSION['userID']= $userid;
    header("location: page.php?page=dashboard");
}else{
    header("location: page.php?page=login");
}
