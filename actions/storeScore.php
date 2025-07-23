<?php

session_start();
include '../connect.php';


if ($_SERVER['REQUEST_METHOD'] == "POST" && (isset($_POST['add'])))
{
    $score = (int) $_POST['add'];
    $type = $_POST['type'];

if ($scire>0)
{
    $sql = "INSERT INTO `team` (`score`,`type`) VALUES ($score ,'$type');";
    $result = mysqli_query($conn,$sql);

    if (!$result) {
        die("خطأ في التنفيذ: " . mysqli_error($conn));
    }
}
header("location:../index.php");
exit;


}
?>