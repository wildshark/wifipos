<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 24-Oct-17
 * Time: 7:27 AM
 */

function data_sheet($conn){
    $sql = "Select * from  package";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc() ){
        echo "
        <tr>
             <td>{$row['packageID']}</td>
             <td>{$row['package']}</td>
             <td>{$row['amount']}</td>
             <td>
                <a href='page.php?page=bundle-edit&id=".$row['packageID']."' class='btn btn-xs btn-default'>Edit</a>
                <a href='page.php?page=bundle-delete&id=".$row['packageID']."' class='btn btn-xs btn-default'>Delete</a>
             </td>
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
                        <th>Package</th>
                        <th>Amount</th>
                        <th></th>
                        </thead>
                        <tbody>
                        <?php data_sheet($conn);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

