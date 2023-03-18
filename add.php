<?php
include_once 'header.php';
include_once 'connection.php';
?>


<html>

<head>
    <title>table</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    
    <form class="container my-4 py-3 bg-info px-5" action="saveform.php" method="post">
    <h2 class="mt-e">Add Record</h2>
        <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label">Addres</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="address">
            </div>
        </div>
        <div class="form-group  d-flex">
            <label class="col-sm-2 col-form-label">Class</label>
            <div class="col-sm-10">
                <select name="class" id="" class="w-100">
                    <option value="" selected disabled>selected class</option>
                    <?php
                    $dbtable = "SELECT * FROM  studentclass";
                    $query = mysqli_query($conn, $dbtable) or die("query seccessful");
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                        <option value="<?php echo $row['cid']?>"><?php echo $row['cname'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="phone">
            </div>
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</body>

</html>