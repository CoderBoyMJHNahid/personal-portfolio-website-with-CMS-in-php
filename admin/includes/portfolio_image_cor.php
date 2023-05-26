<?php 
    include "connect.php";

    $service_cat = mysqli_real_escape_string($conn,$_POST['service_cat']);

    $filename = htmlentities($_FILES['portfolio_image']['name']);

    $extension = pathinfo($filename, PATHINFO_EXTENSION) ;
    
    $valid_extensions = array("jpg","jpeg", "png");

    if(in_array($extension, $valid_extensions)){

        $new_name_logo = rand() . "." . $extension;

        $path = "../../images/" . $new_name_logo;

        move_uploaded_file($_FILES['portfolio_image']['tmp_name'],$path);
        
        $sql = "INSERT INTO `portfolio_image`(`p_img`, `p_cat`) VALUES ('{$new_name_logo}','{$service_cat}')";
        
        $runQuery = mysqli_query($conn,$sql) or die("Query failed!!");

        if ($runQuery) {
            echo json_encode(array('success' => "Data Updated" , "status" => "true" ));
        } else {
            echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
        }

    } else {
        echo json_encode(array('error' => "Data doesn't Updated" , "status" => "false" ));
    }

    
    
?>