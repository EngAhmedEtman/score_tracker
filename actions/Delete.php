<?php
include '../connect.php';
    $sql = "DELETE FROM team";
    $result = mysqli_query($conn,$sql);
    header("location:../index.php");

?>