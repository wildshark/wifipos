
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
                <div class="card-content">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Start Date</label>
                                    <input type="date" name='start-date' value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">End Date</label>
                                    <input type="date" name='end-date' value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="page" value="sales-search" class="btn btn-primary pull-right">Search Sales</button>
                        <button type="submit" name="page" value="all-sales" class="btn btn-primary pull-right">All Sales</button>
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


