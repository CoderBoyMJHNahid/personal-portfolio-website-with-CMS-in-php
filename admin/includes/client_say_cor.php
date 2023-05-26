<?php 
    include "connect.php";

    $name = mysqli_real_escape_string($conn,$_POST['client_name']);
    $desc = mysqli_real_escape_string($conn,$_POST['client_reviews']);


    $sql = "INSERT INTO `client_reviews`(`cr_name`,`cr_reviews`,`text_only`) VALUES ('{$name}','{$desc}', '1')";
            
    $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

    if ($runQuery) {

        echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
    
    } else {

        echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
    
    }

    
    
?>