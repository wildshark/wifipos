<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 28-Oct-17
 * Time: 4:31 AM
 */
$alert=$_GET['alert-msg'];
//$alert_status=$_GET['alert-status'];

function alert_info($msg){

    echo "
    <div class=\"alert alert-info\">
    <div class=\"container-fluid\">
    <div class=\"alert-icon\">
	    <i class=\"material-icons\">info_outline</i>
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
	    <span aria-hidden=\"true\"><i class=\"material-icons\">clear</i></span>
    </button>
        <b>Info alert:</b>{$msg}
    </div>
    </div>
    ";
}

function alert_success($msg){

    echo "
    <div class=\"alert alert-success\">
    <div class=\"container-fluid\">
    <div class=\"alert-icon\">
	    <i class=\"material-icons\">check</i>
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
	    <span aria-hidden=\"true\"><i class=\"material-icons\">clear</i></span>
    </button>
        <b>Success Alert:</b> {$msg}
    </div>
    </div>
    ";
}
function alert_warning($msg){

    echo "
    <div class=\"alert alert-warning\">
    <div class=\"container-fluid\">
    <div class=\"alert-icon\">
	    <i class=\"material-icons\">warning</i>
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
	    <span aria-hidden=\"true\"><i class=\"material-icons\">clear</i></span>
    </button>
        <b>Warning Alert:</b> {$msg}
    </div>
    </div>";
}
function alert_danger($msg){

    echo"
    <div class=\"alert alert-danger\">
    <div class=\"container-fluid\">
    <div class=\"alert-icon\">
        <i class=\"material-icons\">error_outline</i>
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
	    <span aria-hidden=\"true\"><i class=\"material-icons\">clear</i></span>
    </button>
        <b>Error Alert:</b> {$msg}
    </div>
    </div>
    ";
}
switch ($alert){
    case 1;
        $msg="No receipt number given";
        alert_warning($msg);
    break;

    case 2;
        $msg="No admission given";
        alert_warning($msg);
    break;

    case 3;
        $msg="No Data bundle Selected";
        alert_warning($msg);
    break;

    case 4;
        $msg="Worry admission number";
        alert_warning($msg);
    break;
}


