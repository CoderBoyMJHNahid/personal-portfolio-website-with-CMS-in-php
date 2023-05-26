<?php 

    include "connect.php";

    $id = htmlentities($_GET['id']);

    $sql = "DELETE FROM service_box WHERE sb_id = '{$id}'";

    $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");

    if ($runQuery) {
        header("Location:../service-boxs.php");
    }
    


?>