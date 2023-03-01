<?php
session_start();
include("../config/dbconfig.php");


if(isset($_POST['confirm_dlt'])){
    $id = $_POST['deletdata'];
    $delete = $connection->query("DELETE FROM `port_image` WHERE `id` = $id");

    if ($delete) {
        $_SESSION['delete'] = 'success';
        header('location:add_image.php');
    }
    else{
        echo "Failed: ";
    }
}

?>

