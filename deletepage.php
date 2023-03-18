<?php
include_once "header.php";
include_once 'connection.php';
if (isset($_POST['deletebtn'])) {
    $stu_id = $_POST['sid'];

    $delete = "DELETE FROM `student` WHERE sid ={$stu_id}";
    $res = mysqli_query($conn, $delete) or die("query unsuccessful");
    header("Location: http://localhost/mysql/crud/index.php");
    mysqli_close($conn);
}
?>

<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="mt-5">


        <h2 class="text-center mb-5">DELETE RRECORD</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="text-center">
            <label class="mb-3">  Please Enter Student ID </label><br/>
            <input type="text" name="sid">
            <button type="submit" name="deletebtn" class="btn btn-dark">Delete</button>
        </form>
    </div>
</body>

</html>