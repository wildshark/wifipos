<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-Oct-17
 * Time: 1:55 PM
 */

$id=$_GET['id'];
$_SESSION['id']=$id;

$sql="Select * from  student_wifi_data WHERE studentID='$id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

function sales($conn,$id){

    $sql = "Select * from user_total_amount WHERE studentID='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    echo "<h4>Total Ticket: {$row['transaction']} </h4>";
    echo "<h4>Total Data: {$row['totaldata']}</h4>";
    echo "<h4>Total Amount: {$row['total']}</h4>";
}

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Edit Profile</h4>
                    <p class="category">Complete your profile</p>
                </div>
                <div class="card-content">
                    <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group label-floating">
                                    <label class="control-label">First Name</label>
                                    <input type="text" value="<?php echo $row['fname']?>" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Surname</label>
                                    <input type="text" value="<?php echo $row['surname']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Admission</label>
                                    <input type="text" value="<?php echo $row['admissionNo']?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group label-floating">
                                    <label class="control-label">Mobile Number</label>
                                    <input type="text" value="<?php echo $row['mobileNo']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Gender</label>
                                    <input type="text" value="<?php echo $row['gender']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Admission Year</label>
                                    <input type="text" value="<?php echo $row['admission_year']?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Program Schedule</label>
                                    <input type="text" value="<?php echo $row['program_schedule']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Program Level</label>
                                    <input type="text" value="<?php echo $row['program_level']?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Username</label>
                                    <input type="text" value="<?php echo $row['admissionNo']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Pin</label>
                                    <input type="text" value="<?php echo $row['pins']?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="page" value="user-profile-edit" class="btn btn-primary pull-right">Edit Profile</button>
                        <input type="hidden" name="id" value="<?php echo $row['studentID']?>">
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="#pablo">
                        <img class="img" src="../assets/img/faces/marc.jpg" />
                    </a>
                </div>
                <div class="content">
                    <h6 class="category text-gray">Purchase History</h6>
                    <h4 class="card-title"><?php echo $row['admissionNo'];?></h4>
                    <p class="card-content">
                        <?php  sales($conn,$id);?>
                    </p>
                    <a href="page.php?page=transaction-ledger" class="btn btn-primary btn-round">ledger</a>
                </div>
            </div>
        </div>
    </div>
</div>