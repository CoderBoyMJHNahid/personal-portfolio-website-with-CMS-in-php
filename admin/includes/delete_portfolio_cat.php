<?php 

    include "connect.php";

    $id = htmlentities($_GET['id']);

    $sql = "DELETE FROM portfolio_cat WHERE pc_id = '{$id}'";

    $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");

    if ($runQuery) {
        header("Location:../protfolio-category.php");
    }
    


?>