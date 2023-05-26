<?php 
    include "connect.php";

    $name = mysqli_real_escape_string($conn,$_POST['portfolio_category']);

    $sql = "INSERT INTO `portfolio_cat`(`pc_title`) VALUES ('{$name}')";
    
    $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

    if ($runQuery) {
        echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
    } else {
        echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
    }
    
?>