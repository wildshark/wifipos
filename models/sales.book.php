<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-Oct-17
 * Time: 10:02 PM
 */

$date=date('Y-m-d');
$package=$_GET['package'];
$admission=$_GET['admission-no'];
$mobile=$_GET['mobile-no'];

$ticket= date('YmdHis');

$sql="INSERT INTO `sales_book` (`studentID`, `pay_date`, `packageID`, `unit`, `amount`) VALUES ('$admission', '$date', '$package', '0', '0')";
$result=$conn->query($sql);

if ($result === TRUE){
    header("location: page.php?page=ticket");
}else{
    echo"Connection failed try again";
}
