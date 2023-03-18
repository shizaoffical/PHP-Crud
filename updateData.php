<?php
include_once 'connection.php';
include_once 'header.php';
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
    <h2 class="text-center mb-5">UPDATE  RRECORD</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="text-center">
        <label class="mb-3"> Please Enter Student ID </label><br />
        <input type="text" name="sid">
        <button type="submit" name="showbtn" class="btn btn-dark">Show</button>
    </form>
 <?php

 if(isset($_POST['showbtn'])){
    $stu_id= $_POST['sid'];
    $sql = "SELECT * FROM  student WHERE sid = {$stu_id}";
    $res = mysqli_query($conn,$sql) or die("query unsuccessful");
    if(mysqli_num_rows($res) > 0){
  while($row = mysqli_fetch_assoc($res)){  
 ?>

    <div>
        <form class="container my-4 py-3 bg-info px-5" action="update.php" method="post">
        <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name='id' value="<?php echo $row['sid'] ?>">
                <input type="text" class="form-control" name='name' value="<?php echo $row['sname'] ?>">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label">Addres</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='address' value="<?php echo $row['saddress'] ?>">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label">Class</label>
            <div class="col-sm-10">
                <?php
                $database = "SELECT * FROM studentclass ";
                $query = mysqli_query($conn, $database) or die("query unsuccessful");
                if (mysqli_num_rows($query) > 0) {
                    echo "<select name='class' class='w-100'>";
                    while ($row1 = mysqli_fetch_assoc($query)) {
                        if ($row['sclass'] == $row1['cid']) {
                            $select = "selected";
                        } else {
                            $select = "";
                        }
                        echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";

                    }
                    echo "</select>";
                }
                ?>
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='phone' value="<?php echo $row['sphone'] ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-danger">update</button>
        </form>
    </div>
    <?php
    }
}
}
    ?>
</body>

</html>