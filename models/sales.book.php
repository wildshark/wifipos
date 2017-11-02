<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-Oct-17
 * Time: 10:02 PM
 */

$date=date('Y-m-d');

if ($_SERVER['REQUEST_METHOD']=="GET"){
    if (empty($_GET['receipt-no'])){
        header("location: page.php?page=ticket&alert-msg=1");
    }elseif(empty($_GET['admission-no'])){
        header("location: page.php?page=ticket&alert-msg=2");
    }elseif(empty($_GET['package'])){
        header("location: page.php?page=ticket&alert-msg=3");
    }else{
        $package=$_GET['package'];
        $receipt = $_GET['receipt-no'];
        $admission = $_GET['admission-no'];

        $sql_admission="select * from student_wifi_data WHere admissionNo='$admission'";
        $result=$conn->query($sql_admission);
        $r=$result->fetch_assoc();
        $student_id=$r['studentID'];
        $_SESSION['user_id']=$student_id;

        if ($r['admissionNo']==$admission) {
            $studentID=$r['studentID'];
            $_SESSION['package']=$package;
            $sql = "INSERT INTO `sales_book` (`studentID`, `pay_date`, `packageID`, `unit`, `amount`) VALUES ('$studentID', '$date', '$package','$receipt', '0')";
            $result = $conn->query($sql);

            if ($result === TRUE) {
                header("location: page.php?page=print-ticket");
            } else {
                echo "Connection failed try again";
            }
        }else{
            echo"Worry admission number";
            header("location: page.php?page=ticket");
        }
    }
}
