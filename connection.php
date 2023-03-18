<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="crud";
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn){
    echo  "";
}
else {
    // echo "connection break";
    die("connection break" . mysqli_connect_errno());
}

?>