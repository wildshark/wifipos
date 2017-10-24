<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 20-Oct-17
 * Time: 5:45 PM
 */

function total_student($conn){
    $sql="SELECT total FROM total_student";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    echo $row['total'];
}

function total_sales($conn){
    $sql="SELECT total FROM total_sales";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    if (!$row['total']){
        echo "0.00";
    }else{
        echo $row['total'];
    };
}

function admission_list($conn){

    $sql="Select * from admission_no_list";
    $result=$conn->query($sql);
    while ($row=$result->fetch_assoc()){
        echo"<option value='{$row['studentID']}'>{$row['admissionNo']}</option>";
    }
}