<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01-Nov-17
 * Time: 9:14 PM
 */

function data1gb($conn){
    $sql="SELECT * FROM data_pack WHERE bundle_type=1";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

   // if (empty($row['Pack'])){
   //     echo "0.00";
   // }else{
        echo $row['Pack'];
   // };
}
