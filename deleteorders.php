<?php
    $id=$_REQUEST['id'];
    include_once "includes/header.php";

    if(!isset($_SESSION['uname'])){
        if ($_SESSION['uname'] != "admin"){
            header('Location: index.php');
        }
    };

    $updatenow = "DELETE FROM orders WHERE Order_id=$id" ;
    if ($conn->query($updatenow) === TRUE) {
        echo '<script>alert("Record updated successfully")</script>';
        header("Location: Vieworders.php");
    } else {
        echo '<script>alert("Update Failed")</script>' . $conn->error;
    };

?>