<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 20-Oct-17
 * Time: 4:43 PM
 */

include_once "session.php";
include_once "config/page.config.php";

$page= $_GET['page'];

switch ($page){


    case"login";
        include_once "login/login.php";
    break;

    case"log-me-in";
        include_once "config/config.php";
        include_once "models/global.php";
        include_once "models/login.php";
    break;

    case"dashboard";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/dashboard/dashboard.php";
        include_once "template/default.php";
    break;

    case"search";
        $q=$_GET['q'];
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/profile/search.list.php";
        include_once "template/default.php";
    break;

    case "user-profile";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/profile/profile.list.php";
        include_once "template/default.php";
    break;

    case "profile-add";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/profile/profile.add.php";
        include_once "template/default.php";
    break;

    case"user-profile-add-data";
        include_once "config/config.php";
        include_once "models/global.php";
        include_once "models/profile.add.php";
    break;

    case"user-profile-view";
        echo $id=$_GET['id'];
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/profile/profile.view.php";
        include_once "template/default.php";
    break;

    case"user-profile-edit";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/profile/profile.edit.php";
        include_once "template/default.php";
    break;

    case "user-profile-update-data";
        include_once "config/config.php";
        $id=$_GET['id'];
        $fname=$_GET['first-name'];
        $surname=$_GET['surname'];
        $admission=$_GET['admission'];
        $mobile=$_GET['mobile'];
        $gender=$_GET['gender'];
        $admission_yr=$_GET['admission-year'];
        $program_schedule=$_GET['program-schedule'];
        $program_level=$_GET['program-level'];
        $username=$_GET['username'];
        $pin=$_GET['pin'];


        $sql="UPDATE `student_wifi_data` SET `fname`='$fname', `surname`='$surname', `admissionNo`='$admission', `mobileNo`='$mobile',`gender`='$gender', `program_schedule`='$program_schedule', `program_level`='$program_level', `admission_year`='$admission_yr', `gender`='$gender', `pins`='$pin' WHERE (`studentID`='$id') LIMIT 1";
        $result=$conn->query($sql);

       header("location: page.php?page=user-profile-view&id={$id}");
    break;

    case"ticket";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/ticket/ticket.php";
        include_once "template/default.php";
    break;

    Case"ticket-add";
        include_once "config/config.php";
        include_once "models/global.php";
        include_once "models/sales.book.php";
    break;

    case"bundle";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/bundle/bundle.list.php";
        include_once "template/default.php";
    break;

    case"sales";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/sales/sales.search.php";
        include_once "template/default.php";
    break;

    case"sales-search";
        $start_date=$_GET['start-date'];
        $end_date=$_GET['end-date'];
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/sales/sales.result.php";
        include_once "template/default.php";
    break;

    case"all-sales";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/sales/sales.list.php";
        include_once "template/default.php";
    break;

    case"sales-book";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/sales/sales.list.php";
        include_once "template/default.php";
    break;

    case"transaction-ledger";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views = "views/transaction/transaction.php";
        include_once "template/default.php";
    break;

    case"all-package";
        include_once "config/config.php";
        include_once "models/global.php";
        $noification = "views/dashboard/noification.php";
        $page_views= "views/bundle/bundle.list.dashboard.php";
        include_once "template/default.php";
    break;

    case"print-ticket";
        include_once "config/config.php";
        include_once "models/global.php";
        include_once "views/ticket/print.ticket.php";
    break;

}

