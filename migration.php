<?php

include 'connect.php';

$sql = "SELECT SUM(score) AS total_score FROM team WHERE type = 'team1' ";
$result = mysqli_query($conn,$sql);
if($result)
{
$scoreTeamOne = mysqli_fetch_assoc($result);
}



$sql = "SELECT SUM(score) AS total_score FROM team WHERE type = 'team2'";
$result = mysqli_query($conn,$sql);
if($result)
{
$scoreTeamTwo = mysqli_fetch_assoc($result);
}

?>


