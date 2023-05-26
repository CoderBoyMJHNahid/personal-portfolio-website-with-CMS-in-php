<?php 

    include "connect.php";

    $id = htmlentities($_GET['id']);

    $sql = "DELETE FROM service_skills WHERE s_id = '{$id}'";

    $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");

    if ($runQuery) {
        header("Location:../what-i-do.php");
    }
    


?>