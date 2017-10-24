<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-Oct-17
 * Time: 12:45 PM
 */
$admission=$_GET['q'];
$search = $admission."%";

function data_sheet($conn,$search){
    $sql = "Select * from  student_wifi_data WHERE admissionNo LIKE '$search' ";
    $result = $conn->query($sql);
   while ($row = $result->fetch_assoc() ){
       if ($row['status'] === 1) {
           $status = "Active";
       } else {
           $status = "Passive";
       }
       echo "
        <tr>
             <td>{$row['fname']}</td>
             <td>{$row['surname']}</td>
             <td>{$row['admissionNo']}</td>
             <td>{$row['mobileNo']}</td>
             <td>{$status}</td>
             <td>
                <a href='page.php?page=user-profile-view&id=".$row['studentID']."' class='btn btn-xs btn-default'>View
             <a href='page.php?page=user-profile-edit&id=".$row['studentID']."' class='btn btn-xs btn-default'>Edit</a>
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
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Admission No#</th>
                        <th>Mobile No#</th>
                        <th>Status</th>
                        <th></th>
                        </thead>
                        <tbody>
                            <?php data_sheet($conn,$search);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
