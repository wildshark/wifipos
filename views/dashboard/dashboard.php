<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-Oct-17
 * Time: 11:53 AM
 */

function data_sheet($conn){
    $sql = "Select * from  student_wifi_data  LIMIT 0,8";
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
             <td><a href='page.php?page=user-profile-view&id=".$row['studentID']."' class='btn btn-xs btn-default'>View
             <a href='page.php?page=user-profile-edit&id=".$row['studentID']."' class='btn btn-xs btn-default'>Edit</a></td>
        </tr>";
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="orange">
                    <i class="material-icons">content_copy</i>
                </div>
                <div class="card-content">
                    <p class="category">Total User</p>
                    <h3 class="title">
                        <?php total_student($conn);?>
                        <small>y</small>
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">warning</i>
                        <a href="#pablo">Get More Space...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="green">
                    <i class="material-icons">store</i>
                </div>
                <div class="card-content">
                    <p class="category">Revenue</p>
                    <h3 class="title">₵<?php total_sales($conn)?></h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="red">
                    <i class="material-icons">info_outline</i>
                </div>
                <div class="card-content">
                    <p class="category">Fixed Issues</p>
                    <h3 class="title">75</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> Tracked from Github
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="blue">
                    <i class="fa fa-twitter"></i>
                </div>
                <div class="card-content">
                    <p class="category">Followers</p>
                    <h3 class="title">+245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <?php data_sheet($conn);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>