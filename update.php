<?php
 include 'connection.php';



 echo $stu_id= $_POST['id'];
 echo $stu_name= $_POST['name'];
echo  $stu_address= $_POST['address'];
echo  $stu_class= $_POST['class'];
echo  $stu_phone= $_POST['phone'];

    
$update = "UPDATE `student` SET `sname`='$stu_name',`saddress`='$stu_address',`sclass`=' $stu_class'
,`sphone`=' $stu_phone' WHERE sid = $stu_id";
   $query = mysqli_query($conn, $update) or die("query seccessful");

   header("Location: http://localhost/mysql/crud/index.php");
   mysqli_close($conn);


?>