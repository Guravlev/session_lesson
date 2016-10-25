<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.10.2016
 * Time: 19:57
 */

session_start();
if (!is_array($_SESSION['dates'])){
    $_SESSION['dates'] = array();
}

$_SESSION['dates'][] = date("H:i:s");
print_r($_SESSION);