<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "score_tracker";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}
?>
