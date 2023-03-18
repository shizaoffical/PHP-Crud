<?php
include "header.php";
include "connection.php";
?>

<html>
<head>
    <title>crud</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
    <div class="container my-5">
        <h2>All Record</h2>
         <?php 
         $select = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid ";
         $result = mysqli_query($conn, $select) or die("query seccessful");
         if(mysqli_num_rows($result) > 0) {
         ?>
    <table class="table">
        <thead>
            <tr class="bg-dark text-light">
                <th scope="col">id</th>
                <th scope="col">Student name</th>
                <th scope="col">student addresss</th>
                <th scope="col">student class</th>
                <th scope="col">student phone</th>
                <th scope="col">About</th>
               
            </tr>
        </thead>
        <tbody>
            <?php 
             while( $row =  mysqli_fetch_assoc($result)) {?>
            <tr>
                <th scope="row"><?php echo $row['sid'] ?></th>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['sclass'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['sid'] ?>" class="btn btn-warning">Edit</a>
                   <a href="delete.php?id=<?php echo $row['sid'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    <?php } 
    else{
        echo "<h2>no recoed found</h2>";
    }

    ?>
</div>
</body>
</html>