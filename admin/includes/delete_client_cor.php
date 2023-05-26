<?php 

    include "connect.php";

    $id = htmlentities($_GET['id']);

    $sql = "DELETE FROM client_reviews WHERE cr_id = '{$id}'";

    $runQuery = mysqli_query($conn,$sql) or die("Query Failed!!");

    if ($runQuery) {
        header("Location:../clients.php");
    }
    


?>