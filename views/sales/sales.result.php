<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 24-Oct-17
 * Time: 10:43 AM
 */

function data_sheet($conn,$start_date,$end_date){
     $sql = "SELECT * FROM sales
WHERE pay_date BETWEEN '$start_date' AND '$end_date';";
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
                        <?php data_sheet($conn,$start_date,$end_date);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
