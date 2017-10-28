<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 27-Oct-17
 * Time: 12:38 PM
 */

$date=date('Y-m-d');
$ticket= date('YmdHis');
$now_date=date('Y-m-d H-i-s');

$fname=$_GET["first-name"];
$surname=$_GET["surname"];
$mobileNo=$_GET["mobile"];
$admissionNo=$_GET["admission"];
$program_schedule=$_GET["program-schedule"];
$program_level=$_GET["program-level"];
$admission_year=$_GET["admission-year"];
$gender=$_GET["gender"];
$pins=$_GET["pin"];
$status="1";

$sql="INSERT INTO `student_wifi_data` (`fname`, `surname`, `mobileNo`, `admissionNo`, `program_schedule`, `program_level`, `create_date`, `admission_year`, `gender`, `pins`, `status`) VALUES ('$fname', '$surname', '$mobileNo', '$admissionNo', '$program_schedule', '$program_level', '$now_date', '$admission_year', '$gender', '$pins', '1')";
$result=$conn->query($sql);

if ($result === TRUE){
    header("location: page.php?page=ticket");
}else{
    echo"Connection failed try again";
}