<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-Oct-17
 * Time: 1:55 PM
 */

?>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Edit Profile</h4>
                    <p class="category">Complete your profile</p>
                </div>
                <div class="col-md-8">
                    <?php include_once "models/alert.php";?>
                </div>
                <div class="card-content">
                    <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group label-floating">
                                    <label class="control-label">Ticket Date</label>
                                    <input type="text" name='time' value="<?php echo date('D, d M Y H:i:s');?>" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Receipt Number</label>
                                        <input type="text" name='receipt-no' value="AA<?php echo date('YmdHis');?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group label-floating">
                                    <label class="control-label">Admission Number</label>
                                    <input type="text" name='admission-no' class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Package</label>
                                    <select name="package" class="form-control">
                                        <option></option>
                                        <option value="1">1.20GB</option>
                                        <option value="2">2.50GB</option>
                                        <option value="3">5.00GB</option>
                                        <option value="4">10.00GB</option>
                                        <option value="5">15.00GB</option>
                                        <option value="6">20.00GB</option>
                                        <option value="7">25.00GB</option>
                                        <option value="8">30.00GB</option>
                                        <option value="9">50.00GB</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="page" value="ticket-add" class="btn btn-primary pull-right">Submit</button>
                        <button type="reset" name="page" value="ticket-add" class="btn btn-primary pull-right">New</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="#pablo">
                        <img class="img" src="template/assets/img/faces/marc.jpg" />
                    </a>
                </div>
                <div class="content">
                    <h6 class="category text-gray">CEO / Co-Founder</h6>
                    <h4 class="card-title">Alec Thompson</h4>
                    <p class="card-content">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
            </div>
        </div>
    </div>
</div>

