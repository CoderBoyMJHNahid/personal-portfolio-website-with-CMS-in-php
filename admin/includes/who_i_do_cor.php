<?php 
    include "connect.php";

    $service_name = mysqli_real_escape_string($conn,$_POST['service_name']);
    $service_cat = mysqli_real_escape_string($conn,$_POST['service_cat']);

    $sql = "INSERT INTO `service_skills`( `skill_name`, `skill_cat`) VALUES ('{$service_name}','{$service_cat}')";
    
    $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

    if ($runQuery) {
        echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
    } else {
        echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
    }
    
?>