<?php 

    include "connect.php";

    $id = htmlentities($_GET['id']);

    $sql = "DELETE FROM portfolio_image WHERE pi_id = '{$id}'";

    $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");

    if ($runQuery) {
        header("Location:../portfolio-image.php");
    }
    


?>