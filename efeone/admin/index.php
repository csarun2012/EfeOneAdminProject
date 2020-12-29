<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './dashboard/index.php';
} else {
    require_once './view/login-form.php';
}
?>