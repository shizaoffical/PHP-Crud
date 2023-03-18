<?php
 include_once 'connection.php';
 echo $stu_name= $_POST['name'];
echo  $stu_address= $_POST['address'];
echo  $stu_class= $_POST['class'];
echo  $stu_phone= $_POST['phone'];


   $insert = "INSERT INTO `student` ( `sname`, `saddress`, `sclass`, `sphone`)
   VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}','{$stu_phone}')";
   $query = mysqli_query($conn, $insert) or die("query seccessful");

   header("Location: http://localhost/mysql/crud/index.php");
   mysqli_close($conn);


?>