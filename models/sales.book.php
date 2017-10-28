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
$receipt=$_GET['receipt-no'];

$ticket= date('YmdHis');

$sql_admission="select * from student_wifi_data WHere admissionNo='$admission'";
$result=$conn->query($sql_admission);
$r=$result->fetch_assoc();

if ($r['admissionNo']==$admission) {
     $studentID=$r['studentID'];
   echo $sql = "INSERT INTO `sales_book` (`studentID`, `pay_date`, `packageID`, `unit`, `amount`) VALUES ('$studentID', '$date', '$package','$receipt', '0')";
   $result = $conn->query($sql);

   if ($result === TRUE) {
        header("location: page.php?page=ticket");
   } else {
        echo "Connection failed try again";
   }

}else{
    echo"Worry admission number";
}
