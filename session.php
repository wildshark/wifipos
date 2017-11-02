<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 20-Oct-17
 * Time: 5:09 PM
 */

if (!isset($_SESSION['id'])){
    session_start();
}elseif (!isset($_SESSION['package'])){
    session_start();
}