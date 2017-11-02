<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 28-Oct-17
 * Time: 9:08 AM
 */

$id= $_SESSION['id'];

function data_sheet($conn,$id){
    $sql = "Select * from  sales where studentID='$id'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc() ){

        echo "
        <tr>
             <td>{$row['paymentID']}</td>
             <td>{$row['pay_date']}</td>
             <td>{$row['package']}</td>
             <td>{$row['admissionNo']}</td>
             <td>{$row['mobileNo']}</td>
             <td>{$row['amount']}</td>
       
        </tr>";
    }
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Simple Table</h4>
                    <p class="category">Here is a subtitle for this table</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <th>Serial #</th>
                        <th>Date</th>
                        <th>Package</th>
                        <th>AdmissionNo</th>
                        <th>MobileNo#</th>
                        <th>Amount</th>
                        </thead>
                        <tbody>
                        <?php data_sheet($conn,$id);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>