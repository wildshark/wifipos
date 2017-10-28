<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 26-Oct-17
 * Time: 3:53 PM
 */

function sales(){
    echo "<h4>Total Ticket: 0.00 </h4>";
    echo "<h4>Total Data: 0.00</h4>";
    echo "<h4>Total Amount: 0.00</h4>";
}


function generateRandomString($length = 7) {
    $characters = '123456789ABCDEFGHIJKLMNPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
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
                                    <input type="text" name='first-name' value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Surname</label>
                                    <input type="text" name='surname' value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Admission</label>
                                    <input type="text" name='admission' value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group label-floating">
                                    <label class="control-label">Mobile Number</label>
                                    <input type="text" name='mobile' value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Gender</label>
                                    <select type="text" name="gender" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Admission Year</label>
                                    <input type="text" name='admission-year' value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Program Schedule</label>
                                    <select type="text" name="program-schedule" class="form-control">
                                        <option value="1">Regular</option>
                                        <option value="2">Weekends</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Program Level</label>
                                    <select name="program-level" class="form-control">
                                        <option value="1">100</option>
                                        <option value="2">200</option>
                                        <option value="3">300</option>
                                        <option value="4">400</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Username</label>
                                    <input type="text" name='username' value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Pin</label>
                                    <input type="text" name='pin' value="<?php echo generateRandomString($length = 7);?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="page" value="user-profile-add-data" class="btn btn-primary pull-right">Save Profile</button>
                        <input type="hidden" name="id" value="">
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
                    <h4 class="card-title"></h4>
                    <p class="card-content">
                        <?php  sales();?>
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Ledger</a>
                </div>
            </div>
        </div>
    </div>
</div>
