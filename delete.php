<?php

include_once "connection.php";
$stu_id= $_GET['id'];

$delete = "DELETE FROM `student` WHERE sid ={$stu_id}";
$res = mysqli_query($conn,$delete) or die("query unsuccessful");
header("Location: http://localhost/mysql/crud/index.php");
mysqli_close($conn);
?> 